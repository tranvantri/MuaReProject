<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    

    public function rules()
    {
        return [
            'tieude'=>'required|max:100|min:2',
            // 'link'=>'required|max:100|min:6|regex: /^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểếẾỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\-\d\s]+$/i',
            // 'link'=>'required|max:100|min:6',
            'img'=>'required|max:190|min:6',            
        ];
    }

    public function messages()
    {
        return [
            'tieude.required'=>'Vui lòng nhập tiêu đề cho ảnh.',                
            'tieude.min'=>'Tiêu đề có độ dài 2-100 kí tự.',                
            'tieude.max'=>'Tiêu đề có độ dài 2-100 kí tự.',                
            // 'tieude.regex'=>'Tiêu đề chỉ bao gồm chữ thường, chữ hoa, số và dấu gạch ngang.',   
                    
            'img.required'=>'Vui lòng chọn ảnh ảnh.',                
            'img.max'=>'Tên ảnh quá dài',                
            // 'img.regex'=>'Url không hợp lệ.',
        ];
    }
}
