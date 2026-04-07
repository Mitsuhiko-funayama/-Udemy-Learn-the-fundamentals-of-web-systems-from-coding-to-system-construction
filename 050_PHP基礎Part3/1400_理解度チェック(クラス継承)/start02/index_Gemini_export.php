<?php

class MyFileWriter {
    // privateからprotectedに変更！これで子供（継承先）もこの変数を使えるようになります。
    protected $filename;
    protected $content = '';

    const APPEND = FILE_APPEND;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function append($text) {
        $this->content .= $text;
        return $this;
    }

    public function newline() {
        $this->content .= PHP_EOL;
        return $this;
    }

    public function commit($mode = 0) {
        file_put_contents($this->filename, $this->content, $mode);
        $this->content = ''; 
        return $this;
    }
}

/**
 * LogWriterクラス
 * MyFileWriterを「extends（継承）」して作ります。
 */
class LogWriter extends MyFileWriter
{
    // appendメソッドを「上書き（オーバーライド）」して、日付がつくように改造！
    public function append($text) {
        $time_str = date('Y/m/d H:i:s');
        // sprintfを使って「日付 メッセージ」の形にするよ
        $formatted_text = sprintf('%s %s', $time_str, $text);
        
        // 親クラスから引き継いだ $content に合体させる
        $this->content .= $formatted_text;
        
        return $this;
    }
}

/**
 * クラスの呼び出し（実行部分）
 **/

// LogWriterを使ってインスタンス（実体）を作る
$info = new LogWriter('info.log');
$error = new LogWriter('error.log'); // 別のファイル名にすると管理しやすいね

// 実行！自動で日付がつくようになっているよ
$info->append('これは通常ログです。')
     ->newline()
     ->commit(LogWriter::APPEND);

$error->append('これはエラーログです。')
      ->newline()
      ->commit(LogWriter::APPEND);