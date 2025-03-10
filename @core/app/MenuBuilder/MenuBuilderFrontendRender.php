<?php


namespace App\MenuBuilder; 


use App\CategoryMenu;
use App\Helpers\LanguageHelper;
use App\Menu;
use App\Product\ProductCategory;
use Illuminate\Support\Pluralizer;
use Illuminate\Support\Str;

class MenuBuilderFrontendRender
{
    protected $page_id;

    public function render_frrontend_panel_menu($id,$type= null){
        $output = '';
        if (empty($id)){
            return $output;
        }
        if (is_null($type)){
            $menu_details_from_db = Menu::find($id);
        }else{
            $menu_details_from_db = CategoryMenu::find($id);
        }


        $default_lang = $menu_details_from_db->lang ?? LanguageHelper::default_slug();
        if(is_null($menu_details_from_db)){
             return $output;
        }
        $menu_data = json_decode($menu_details_from_db->content);   
        $this->page_id = 1;

        if (count((array)$menu_data) > 0){
            foreach ($menu_data as $menu_item){
                $this->page_id++;
                if($this->page_id == 2){
                    $output .= '<li class = ""><a href="https://web.eska.tech/website">Strona główna</a></li>';
                    
                    continue;
                }
                if($this->page_id == 4){
                    $output .= '<li class = ""><a href="https://web.eska.tech/website/product">Produkty</a></li>';
                    continue;
                }
                if($this->page_id !=177)$output .= $this->render_menu_item($menu_item,$this->page_id,$default_lang)  ;
            }
        }


        return $output;
    }


    private function get_attribute_string(array $li_attributes):string
    {
        if (empty($li_attributes)){return '';}
        $attr_val = '';
        foreach ($li_attributes as $attr => $value){
            //fix class append issue

            if (!empty($value) && $attr != 'class'){
                $attr_val .= $attr.'="'.$value.'"';
            }elseif($attr === 'class'){
                if (!is_array($value)){
                    $attr_val .= $attr.'="'.$value.'"';
                }else{
                    $class_attr = 'class="';
                    foreach ($value as $cl){
                        $class_attr .= ' '.$cl.' ';
                    }
                    $class_attr .= '"';
                    $attr_val = $class_attr;
                }
            }
        }
        return $attr_val;
    }

    private function render_li_start(string $title, array $attributes_string,$default_lang)
    {
        $output = "\n\t".'<li '.$this->get_attribute_string($attributes_string).'> '."\n";

        return $output;
    }


    private function render_menu_item($menu_item, int $page_id, $default_lang)
    {
        $attributes_string = property_exists($menu_item,'children') ? ['class' => ['menu-item-has-children']]  : [];
        
        if (empty((array)$menu_item)){return;}
        $menu_item = (object) $menu_item ;
        $ptype =  property_exists($menu_item,'ptype') ? $menu_item->ptype : '';
        $ppname =  property_exists($menu_item,'pname') ? $menu_item->pname : '';
        $pname = __($ppname);
        $output = '';


        if ($ptype === 'custom'){

            //check to activation class
            if (request()->path() === $menu_item->purl){
                if (isset($attributes_string['class'])){
                    $attributes_string[] = ['class' => ['current-menu-item']];
                }else{
                    $attributes_string['class'][] = 'current-menu-item';
                }
            }

            $output .=  $this->render_li_start($pname,$attributes_string,$default_lang);
            $title = $pname;
            $output .= $this->get_anchor_markup($title,[
                'href' => str_replace('@url',url('/'),$menu_item->purl),
                'target' => $menu_item->antarget ?? '',
            ],$menu_item->icon ?? '');
            
            // dd($output);
            // if($title =="Home") return $output;
        }
        elseif ($ptype === 'product_category'){
            $model = ProductCategory::where('id',$menu_item->pid)->first();
            if(!is_null($model)){
                 $title = $model->title;
                $output .=  $this->render_li_start($pname,$attributes_string,$default_lang);
    
    
                // get anchor data
                $output .= $this->get_anchor_markup($title,[
                    'href' => route('frontend.products.category',['id' => $model->id,'title' => Str::slug($title)]) ,
                    'target' => $menu_item->antarget ?? '',
                ],$menu_item->icon ?? '');
            }
           

        }
        elseif ($ptype === 'static'){
            $menu_slug =  get_static_option(str_replace('-','_',$menu_item->pslug).'_page_slug');
            if (request()->path() == $menu_slug){
                if (isset($attributes_string['class'])){
                    $attributes_string['class'][] = 'current-menu-item';
                }else{
                    $attributes_string['class'] =  ['current-menu-item'];
                }
            }

            $title = get_static_option(str_replace('-','_',$menu_item->pslug).'_page_name') ?? '';
            $output .=  $this->render_li_start($pname,$attributes_string,$default_lang);


            // get anchor data
            $output .= $this->get_anchor_markup(__($title),[
                'href' => url('/').'/'. $menu_slug ?? '' ,
                'target' => $menu_item->antarget ?? '',
            ],$menu_item->icon ?? '');

        }else{
            //check is mega menu
            preg_match('/MegaMenus/',$ptype,$matches);
            preg_match('/CategoryMenu/',$ptype,$cat_menu);

            if (!empty($matches[0])){
                $li_attributes = ['class' => 'menu-item-has-mega-menu'];
                $class_name = '\\'.$ptype;
                $instance = new $class_name();
                if ($instance->enable()){
                    $static_name = str_replace('[lang]',$default_lang,$instance->name());
                    $title = htmlspecialchars(strip_tags(get_static_option($static_name)));
                    $output .=  $this->render_li_start($title,$li_attributes,$default_lang);
                    // get anchor data
                    $output .= $this->get_anchor_markup($title,[
                        'href' => url('/').'/'.get_static_option($instance->slug()) ?? '#' ,
                        'target' => $menu_item->antarget ?? '',
                    ],$menu_item->icon ?? '');
                    $output .= $instance->render($menu_item->items_id ?? '',$default_lang);
                }
            }elseif (!empty($cat_menu[0])){

                //load mega menu content
                $li_attributes = ['class' => 'menu-item-has-children  mega-menu-wrap'];
                $class_name = '\\'.$ptype;
                $instance = new $class_name();
                if ($instance->enable()){
                    $category = ProductCategory::find($menu_item->items_id);
                    if(!is_null($category)){
                         $title = htmlspecialchars(strip_tags($category->title));
                        $output .=  $this->render_li_start($title,$li_attributes,$default_lang);
                        // get anchor data
                        $output .= $this->get_anchor_markup($title,[
                            'href' => 'javascript:void(0)' ,
                        ],$menu_item->icon ?? '');
                        $output .= $instance->render($menu_item->items_id ?? '',$default_lang,$menu_item->sub_cat_items_id ?? '',$title);
                    }
                   
                }
            }else {

                $menu_setup_instance = new MenuBuilderSetup();
                $all_dynamic_menus =  $menu_setup_instance->register_dynamic_menus();
                $dynamic_menu_type = $all_dynamic_menus[$ptype] ?? null;

                if ($dynamic_menu_type){

                    //load dynamic page item
                    $model_name = '\\'.$dynamic_menu_type['model'];
                    $model = new $model_name();

                    if ($dynamic_menu_type['query'] === 'old_lang'){
                        $item_details = $model->where(['lang' => $default_lang,'id' => $menu_item->pid])->where(['status' => 'publish'])->first();
                    }elseif($dynamic_menu_type['query'] === 'new_lang'){
                        $item_details =  $model->with(['lang_query' => function($query) use ($default_lang){
                            $query->where('lang' , $default_lang);
                        }])->where(['status' => 'publish' ,'id' => $menu_item->pid])->first();
                    }else{
                        $item_details = $model->where(['id' => $menu_item->pid,'status' => 'publish'])->first();
                    }
                    
                    if(empty($item_details)){
                        return;
                    }
                    
                    $title_param = $dynamic_menu_type['title_param'];

                    if ($dynamic_menu_type['query'] === 'old_lang'){
                        $title = $item_details->$title_param ?? '';
                    }elseif($dynamic_menu_type['query'] === 'new_lang'){
                        $title = $item_details->lang_query->$title_param ?? '';
                    }else{
                        $title = $item_details->$title_param ?? '';
                    }

                    //name
                    if (request()->path() === get_static_option(str_replace('_name','_slug',$dynamic_menu_type['name'])) .'/'.$item_details->slug ){
                        if (isset($attributes_string['class'])){
                            $attributes_string['class'][] = 'current-menu-item';
                        }else{
                            $attributes_string['class'] =  ['current-menu-item'];
                        }
                    }


                    $output .=  $this->render_li_start($title,$attributes_string,$default_lang);
                    // get anchor data
                    $route_params = [];
                    $route_params_list= $dynamic_menu_type['route_params'] ?? [];

                    foreach ($route_params_list as $param){

                        if ($dynamic_menu_type['query'] === 'old_lang'){
                            $dynamic_param = $item_details->$param ?? '';
                        }elseif($dynamic_menu_type['query'] === 'new_lang'){
                            $dynamic_param = $item_details->lang_query->$param ?? '';
                        }else{
                            $dynamic_param = $item_details->$param ?? '';
                        }
                        if (preg_match('/id/',$param)){
                            $route_params['id'] = $dynamic_param;
                        }else{
                            $route_params[$param] = $dynamic_param;
                        }
                    }

                    if($title){
                        $output .= $this->get_anchor_markup($title,[
                            'href' => route($dynamic_menu_type['route'],$route_params),
                            'target' => $menu_item->antarget ?? '',
                        ],$menu_item->icon ?? '');
                    }
                  
                }
            }
        }
        //check it has children
        if (property_exists($menu_item,'children') && $title !="Home"){
            $output .= $this->render_children_item($menu_item->children,$default_lang);
        }

        $output .= '</li>';
        return $output;
    }

    protected function render_children_item($menu_item,$default_lang){
        if (empty((array)$menu_item)){return;}
        $output= '';
        $output .= '<ul class="sub-menu">'."\n";
        foreach ( $menu_item as $ch_item) {
            $this->page_id +=1;
            $output .=  $this->render_menu_item( $ch_item, $this->page_id, $default_lang);
        }
        $output .= '</ul>'."\n";
        return $output;
    }

    private function get_anchor_markup(string $title,array $args, $icon = null)
    {
        $icon_markup = $icon ? "<i class='".$icon."'></i>" : '';
        return "\t\t".'<a '.$this->get_attribute_string($args).'>'.$icon_markup.__($title).'</a>'."\n";
    }


}
