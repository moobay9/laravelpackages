<?php

namespace Funaffect\LaravelPackages\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TransformsRequest;

class ConvertKanjiNumber extends TransformsRequest
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
        $this->only = config('packages.convert_kanji_number');
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
        // 対象でなければ処理しない
        if ( ! in_array($key, $this->only, true)) {
            return $value;
        }

        // 漢字
        $value = str_replace('〇', '0', $value);
        $value = str_replace('一', '1', $value);
        $value = str_replace('二', '2', $value);
        $value = str_replace('三', '3', $value);
        $value = str_replace('四', '4', $value);
        $value = str_replace('五', '5', $value);
        $value = str_replace('六', '6', $value);
        $value = str_replace('七', '7', $value);
        $value = str_replace('八', '8', $value);
        $value = str_replace('九', '9', $value);

        // 特殊文字
        $value = str_replace('①', '1', $value);
        $value = str_replace('②', '2', $value);
        $value = str_replace('③', '3', $value);
        $value = str_replace('④', '4', $value);
        $value = str_replace('⑤', '5', $value);
        $value = str_replace('⑥', '6', $value);
        $value = str_replace('⑦', '7', $value);
        $value = str_replace('⑧', '8', $value);
        $value = str_replace('⑨', '9', $value);

        // 処理返却
        return $value;
    }
}
