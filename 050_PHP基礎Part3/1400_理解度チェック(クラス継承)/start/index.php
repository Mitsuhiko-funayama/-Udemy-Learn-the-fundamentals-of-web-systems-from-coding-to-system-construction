<?php
/**
 * 理解度度チェック（クラス継承）
 * 
 * MyFileWriterを継承してログをファイルに書き込む、LogWriterクラスを作成する。
 * 
 * LogWriterクラスではFormatメソッドにより、
 * 出力したい文字列に時間を設定できるものとする。
 * 
 * 例）
 * 2021/04/04 23:30:40 これはログです
 * 
 * ヒント）
 * MyFileWriterのメソッドも一部変更する必要がある。
 */

class MyFileWriter {
    // 外部から変更されたくない「書き込むファイル名」や「溜めている内容」を保存する変数
    private $filename;
    private $content = '';

    // 書き込みモードを区別するための「定数」
    const APPEND = FILE_APPEND;

    // クラスを作った瞬間に動く「コンストラクタ」
    public function __construct($filename) {
        $this->filename = $filename;
    }

    // 文字列を後ろに付け加える
    public function append($text) {
        $this->content .= $text;
        return $this; // メソッドチェーン（->でつなぐ）を可能にする魔法の一行
    }

    // 改行を加える
    public function newline() {
        $this->content .= PHP_EOL;
        return $this;
    }

    // 実際にファイルに書き込む（保存する）
    public function commit($mode = 0) {
        file_put_contents($this->filename, $this->content, $mode);
        $this->content = ''; // 書き終わったら中身を空にする
        return $this;
    }
}

/**
 * 文字列のフォーマット
 */
$time_str = date('Y/m/d H:i:s');
sprintf('%s %s', $time_str, '文字列'); // 「%s」が変数を表している

/**
 * クラスの呼び出し方は以下のようにする
 * 
 * $info = new LogWriter('info.Log');
 * $error = new LogWriter('info.Log');
 * 
 * $info -> append('これは通常ログです。');
 *  -> newline()
 *  -> commit(LogWriter::APPEND);
 * 
 */