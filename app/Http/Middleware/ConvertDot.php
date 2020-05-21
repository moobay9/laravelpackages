<?php

namespace Funaffect\LaravelPackages\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TransformsRequest;

class ConvertDot extends TransformsRequest
{
    /**
     * 限定.
     *
     * @var array
     */
    protected $only;

    /** 
     * コンストラクタ
     */
    public function __construct()
    {
        $this->only = config('packages.convert_one_byte');
    }

    /**
     * Transform the given value.
     * 半角変換
     * @param  string $key
     * @param  mixed  $value
     * @return mixed
     */
    protected function transform($key, $value)
    {
        // エラー処理
        if ($value == '') return '';

        // 除外
        if ( ! in_array($key, $this->only, true)) {
            return $value;
        }

        // 処理
        $value = str_replace('。', '.', $value);
        $value = str_replace('．' , '.', $value);

        return $value ;
    }
}
