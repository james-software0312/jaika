<?php 

namespace App\Action;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckoutAction {
    /**
     * @param $request 
     * @param $type cheque | bank
     */
    public static function uploadCheckoutImage(Request $request, $type = 'cheque')
    {
        $folder_path = "assets/uploads/checkout/$type-images/";

        $upload_field = $type == 'cheque' ? 'cheque_payment_input' : 'bank_payment_input';

        if ($request->hasFile($upload_field)) {
            $image = $request->$upload_field;
            $image_extension = $image->extension();
            $image_name_with_ext = $image->getClientOriginalName();

            $image_name = pathinfo($image_name_with_ext, PATHINFO_FILENAME);
            $image_name = strtolower(Str::slug($image_name));

            $image_db = $image_name . time() . '.' . $image_extension;

            $image->move($folder_path, $image_db);

            return $folder_path . $image_db;
        }
        return null;
    }
}
