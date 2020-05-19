<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute は必須項目です。',
    'active_url'           => ':attribute が有効なURLではありません。',
    'after'                => ':attribute には、:dateより後の日付を指定してください。',
    'after_or_equal'       => ':attribute には、:date以降の日付を指定してください。',
    'alpha'                => ':attribute はアルファベットのみがご利用できます。',
    'alpha_dash'           => ':attribute はアルファベットとダッシュ(-)及び下線(_)がご利用できます。',
    'alpha_num'            => ':attribute はアルファベット数字がご利用できます。',
    'array'                => ':attribute は配列でなくてはなりません。',
    'before'               => ':attribute には、:dateより前の日付をご利用ください。',
    'before_or_equal'      => ':attribute には、:date以前の日付をご利用ください。',
    'between'              => [
        'numeric' => ':attribute は、:minから:maxの間で指定してください。',
        'file'    => ':attribute は、:min kBから、:max kBの間で指定してください。',
        'string'  => ':attribute は、:min文字から、:max文字の間で指定してください。',
        'array'   => ':attribute は、:min個から:max個の間で指定してください。',
    ],
    'boolean'              => ':attribute は、trueかfalseを指定してください。',
    'confirmed'            => ':attribute が一致しません。',
    'date'                 => ':attribute には有効な日付を指定してください。',
    'date_equals'          => ':attribute には、:dateと同じ日付けを指定してください。',
    'date_format'          => ':attribute は:format形式で指定してください。',
    'different'            => ':attribute と:otherには、異なった内容を指定してください。',
    'digits'               => ':attribute は :digits 文字の数字で入力してください。',
    'digits_between'       => ':attribute は :min から :max 文字の間で入力してください。',
    'dimensions'           => ':attribute の図形サイズが正しくありません。',
    'distinct'             => ':attribute には異なった値を指定してください。',
    'email'                => ':attribute は正しいメールアドレスではありません。',
    'ends_with'            => ':attribute には、:valuesのどれかで終わる値を指定してください。',
    'exists'               => ':attribute が登録されていません。',
    'file'                 => ':attribute にはファイルを指定してください。',
    'filled'               => ':attribute に値を指定してください。',
    'gt'                   => [
        'numeric' => ':attribute には、:valueより大きな値を指定してください。',
        'file'    => ':attribute には、:value kBより大きなファイルを指定してください。',
        'string'  => ':attribute は、:value文字より長く指定してください。',
        'array'   => ':attribute には、:value個より多くのアイテムを指定してください。',
    ],
    'gte'                  => [
        'numeric' => ':attribute には、:value以上の値を指定してください。',
        'file'    => ':attribute には、:value kB以上のファイルを指定してください。',
        'string'  => ':attribute は、:value文字以上で指定してください。',
        'array'   => ':attribute には、:value個以上のアイテムを指定してください。',
    ],
    'image'                => ':attribute には画像ファイルを指定してください。',
    'in'                   => '選択された:attribute は正しくありません。',
    'in_array'             => ':attribute には:otherの値を指定してください。',
    'integer'              => ':attribute は整数で入力してください。',
    'ip'                   => ':attribute には、有効なIPアドレスを指定してください。',
    'ipv4'                 => ':attribute には、有効なIPv4アドレスを指定してください。',
    'ipv6'                 => ':attribute には、有効なIPv6アドレスを指定してください。',
    'json'                 => ':attribute には、有効なJSON文字列を指定してください。',
    'lt'                   => [
        'numeric' => ':attribute には、:valueより小さな値を指定してください。',
        'file'    => ':attribute には、:value kBより小さなファイルを指定してください。',
        'string'  => ':attribute は、:value文字より短く指定してください。',
        'array'   => ':attribute には、:value個より少ないアイテムを指定してください。',
    ],
    'lte'                  => [
        'numeric' => ':attribute が最大値を超えています。',
        'file'    => ':attribute には、:value kB以下のファイルを指定してください。',
        'string'  => ':attribute は、:value文字以下で指定してください。',
        'array'   => ':attribute には、:value個以下のアイテムを指定してください。',
    ],
    'max'                  => [
        'numeric' => ':attribute は :max 以内で入力してください。',
        'file'    => ':attribute には、:max kB以下のファイルを指定してください。',
        'string'  => ':attribute は :max 文字以下で入力してください。',
        'array'   => ':attribute は:max個以下指定してください。',
    ],
    'mimes'                => ':attribute には:valuesタイプのファイルを指定してください。',
    'mimetypes'            => ':attribute には:valuesタイプのファイルを指定してください。',
    'min'                  => [
        'numeric' => ':attribute には、:min以上の数字を指定してください。',
        'file'    => ':attribute には、:min kB以上のファイルを指定してください。',
        'string'  => ':attribute は :min 文字以上で入力してください。',
        'array'   => ':attribute は:min個以上指定してください。',
    ],
    'not_in'               => ':attribute を選択してください。',
    'not_regex'            => ':attribute の形式が正しくありません。',
    'numeric'              => ':attribute は数字で入力してください。',
    'password'             => 'パスワードが正しくありません。',
    'present'              => ':attribute が存在していません。',
    'regex'                => ':attribute に正しい形式を指定してください。',
    'required'             => ':attribute は必須項目です。',
    'required_if'          => ':attribute は必須項目です。',
    'required_unless'      => ':otherが:valuesでない場合、:attribute を指定してください。',
    'required_with'        => ':valuesを指定する場合は、:attribute も指定してください。',
    'required_with_all'    => ':valuesを指定する場合は、:attribute も指定してください。',
    'required_without'     => ':valuesを指定しない場合は、:attribute を指定してください。',
    'required_without_all' => ':attribute は必須項目です。',
    'same'                 => ':attribute と:otherには同じ値を指定してください。',
    'size'                 => [
        'numeric' => ':attribute は:sizeを指定してください。',
        'file'    => ':attribute のファイルは、:sizeキロバイトでなくてはなりません。',
        'string'  => ':attribute は:size文字で指定してください。',
        'array'   => ':attribute は:size個指定してください。',
    ],
    'starts_with'          => ':attribute には、:valuesのどれかで始まる値を指定してください。',
    'string'               => ':attribute は文字列を指定してください。',
    'timezone'             => ':attribute には、有効なゾーンを指定してください。',
    'unique'               => ':attribute は既に使用されています。',
    'uploaded'             => ':attribute のアップロードに失敗しました。',
    'url'                  => ':attribute は正しいURL形式ではありません。',
    'uuid'                 => ':attribute に有効なUUIDを指定してください。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    'hiragana'      => ':attribute はひらがなで入力してください。',
    'katakana'      => ':attribute はカタカナで入力してください。',
    'ymd'           => ':attribute は YYYY-MM-DD 形式で入力してください。',
    'duplicateuser' => ':attribute は既に使用されています。',
    'max_length'    => ':attribute は :max 文字以下で指定してください。',
    'min_length'    => ':attribute は :min 文字以上で指定してください。',
    'keitai_email'  => ':attribute に携帯電話のアドレスは使用できません。',

    'current_password' => ':Attribute は正しくありません。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'username'       => 'ユーザーID',
        'email'          => 'メールアドレス',
        'password'       => 'パスワード',
    ],

];
