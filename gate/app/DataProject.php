<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataProject extends Model
{
    // Eloquentモデル規約
    // https://readouble.com/laravel/5.4/ja/eloquent.html
    /* コネクション名
     *
     *
     */
    protected $connection = 'mysql';

    /* 主キー
     * Eloquentは更にテーブルの主キーがidというカラム名であると想定しています。この規約をオーバーライドする場合はprimaryKeyプロパティを定義してください。
    * さらに、Eloquentは主キーを自動増分される整数値であるとも想定しています。つまり、デフォルト状態で主キーは自動的にintへキャストされます。自動増分ではない、もしくは整数値ではない主キーを使う場合、モデルにpublicの$incrementingプロパティーを用意し、falseをセットしてください。
     */
    // public $incrementing = 'false';

    /* テーブル名
     * Flightモデルにどのテーブルを使用するか、Eloquentに指定していない点に注目してください。他の名前を明示的に指定しない限り、クラス名を複数形の「スネークケース」にしたものが、テーブル名として使用されます。今回の例で、EloquentはFlightモデルをflightsテーブルに保存します。モデルのtableプロパティを定義し、カスタムテーブル名を指定することもできます。
     */
    // protected $table = 'data_Projects';

    /* タイムスタンプ
     * デフォルトでEloquentはデータベース上に存在するcreated_at(作成時間)とupdated_at(更新時間)カラムを自動的に更新します。これらのカラムの自動更新をEloquentにしてほしくない場合は、モデルの$timestampsプロパティーをfalseに設定してください。
     */
    public $timestamps = true;
}
