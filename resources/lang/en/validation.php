<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    |  following language lines contain  default error messages used by
    |  validator class. Some of se rules have multiple versions such
    | as  size rules. Feel free to tweak each of se messages here.
    |
    */

    'accepted' => ':attribute phải được chấp nhận.',
    'active_url' => ':attribute không phải là đường dẫn hợp lệ.',
    'after' => ' :attribute phải là ngày sau :date.',
    'after_or_equal' => ':attribute phải là ngày sau hoặc bằng với :date.',
    'alpha' => ':attribute chỉ có thể là chữ cái.',
    'alpha_dash' => ':attributechỉ có thể là chữ cái, số, dấu gạch ngang và dấu gạch dưới.',
    'alpha_num' => ':attribute chỉ có thể chữ là số.',
    'array' => ':attribute phải là một mảng.',
    'before' => ':attribute phải là ngày trước :date.',
    'before_or_equal' => ':attribute phải là ngày trước hoặc bằng với :date.',
    'between' => [
        'numeric' => ':attribute phải ở giữa :min và :max.',
        'file' => ':attribute phải ở giữa :min và :max kb.',
        'string' => ':attribute phải ở giữa :min và :max chữ.',
        'array' => ':attribute phải ở giữa :min và :max .',
    ],
    'boolean' => ':attribute bắt buộc phải đúng hoặc sai.',
    'confirmed' => ':attribute xác thực không hợp lệ.',
    'date' => ' :attribute không phải là ngày hợp lệ.',
    'date_equals' => ':attribute phải là ngày bằng :date.',
    'date_format' => ':attribute không hợp lệ với định dạng :format.',
    'different' => ':attribute và :or phải khác nhau.',
    'digits' => ':attribute phải là :digits chữ số.',
    'digits_between' => ':attribute phải ở giữa :min và :max chữ số.',
    'dimensions' => ':attribute có kích thước hình ảnh không hợp lệ.',
    'distinct' => ':attribute có giá trị trùng lặp.',
    'email' => ':attribute phải là email hợp lệ.',
    'ends_with' => ':attribute phải kết thức bằng một trong các giá trị sau đây: :values.',
    'exists' => ':attribute đã chọn không hợp lệ.',
    'file' => ':attribute phải là một tệp.',
    'filled' => ':attribute phải là một giá trị cụ thể.',
    'gt' => [
        'numeric' => ':attribute phải lớn hơn :value.',
        'file' => ':attribute phải lớn hơn :value kb.',
        'string' => ':attribute phải lớn hơn :value kí tự.',
        'array' => ':attribute phải nhiều hơn :value.',
    ],
    'gte' => [
        'numeric' => ':attribute phải lớn hơn hoặc bằng :value.',
        'file' => ':attribute phải lớn hơn hoặc bằng :value kb.',
        'string' => ':attribute phải lớn hơn hoặc bằng :value kí tự.',
        'array' => ':attribute phải là :value hoặc hơn.',
    ],
    'image' => ':attribute phải là ảnh.',
    'in' => ':attribute đã chọn không hợp lệ.',
    'in_array' => ':attribute không tồn tại trong :or.',
    'integer' => ':attribute phải là số nguyên.',
    'ip' => ':attribute phải là địa chỉ IP hợp lệ.',
    'ipv4' => ':attribute phải là địa chỉ IPv4 hợp lệ.',
    'ipv6' => ':attribute phải là địa chỉ IPv6 hợp lệ.',
    'json' => ':attribute phải là chuỗi JSON hợp lệ.',
    'lt' => [
        'numeric' => ':attribute phải nhỏ hơn :value.',
        'file' => ':attribute phải nhỏ hơn :value kb.',
        'string' => ':attribute phải nhỏ hơn :value kí tự.',
        'array' => ':attribute phải nhỏ hơn :value.',
    ],
    'lte' => [
        'numeric' => ':attribute phải nhỏ hơn hoặc bằng :value.',
        'file' => ':attribute phải nhỏ hơn hoặc bằng :value kb.',
        'string' => ':attribute phải nhỏ hơn hoặc bằng :value kí tự.',
        'array' => ':attribute không được nhiều hơn :value.',
    ],
    'max' => [
        'numeric' => ':attribute không được lớn hơn :max.',
        'file' => ':attribute không được lớn hơn :max kb.',
        'string' => ':attribute không được lớn hơn :max kí tự.',
        'array' => ':attribute may not have more than :max.',
    ],
    'mimes' => ':attribute phải là một loại tập tin: :values.',
    'mimetypes' => ':attribute phải là một loại tập tin: :values.',
    'min' => [
        'numeric' => ':attribute phải tối thiểu :min.',
        'file' => ':attribute phải tối thiểu :min kb.',
        'string' => ':attribute phải tối thiểu :min kí tự.',
        'array' => ':attribute phải có tối thiểu :min.',
    ],
    'not_in' => ':attribute đã chọn không hợp lệ.',
    'not_regex' => ':attribute định dạng không hợp lệ.',
    'numeric' => ':attribute phải là số.',
    'password' => 'Mật khẩu không chính xác.',
    'present' => ':attribute phải được điền.',
    'regex' => ':attribute định dạng không hợp lệ.',
    'required' => ':attribute là bắt buộc.',
    'required_if' => ':attribute là bắt buộc khi :or là :value.',
    'required_unless' => ':attribute là bắt buộc trừ khi :or ở trong :values.',
    'required_with' => ':attribute là bắt buộc khi :values được điền.',
    'required_with_all' => ':attribute là bắt buộc khi :values được điền.',
    'required_without' => ':attribute là bắt buộc khi :values không được điền.',
    'required_without_all' => ':attribute là bắt buộc khi không cái nào thuộc :values được điền.',
    'same' => ':attribute và :or phải trùng nhau.',
    'size' => [
        'numeric' => ':attribute phải là :size.',
        'file' => ':attribute phải là :size kb.',
        'string' => ':attribute phải là :size kí tự.',
        'array' => ':attribute phải bao gồm :size.',
    ],
    'starts_with' => ':attribute phải bắt đầu với một trong các kí tự sau: :values.',
    'string' => ':attribute phải là một chỗi.',
    'timezone' => ':attribute phải là một khu vực hợp lệ.',
    'unique' => ':attribute đã được sử dụng.',
    'uploaded' => ':attribute tải lên thất bại.',
    'url' => 'attribute định dạng không hợp lệ.',
    'uuid' => ':attribute phải là UUID hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using 
    | convention "attribute.rule" to name  lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    |  following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
