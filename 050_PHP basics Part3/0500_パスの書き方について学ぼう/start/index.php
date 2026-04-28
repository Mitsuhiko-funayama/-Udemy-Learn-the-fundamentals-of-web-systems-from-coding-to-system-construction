<?php
/**
 * パスの書き方について学ぼう
 * 
 * - 相対パスと絶対パス
 * - マジック定数 __DIR__, __FILE__を使ってみよう
 * - dirnameの使い方を学ぼう
 * - \と/は使い分けよう -> Win,Mac,Linux全てで「/」を使う！！
 * - "と'は使い分けよう -> phpでは「\」基本的に使わない方が無難、
 *                       ''、""の使い分けはURL参照：https://qiita.com/bitcoinjpnnet/items/64458299eaeefbacab44
 */
/**
 * 相対パスとは？：
 * ファイル名で指定する方法を相対パスという
 * 現在のファイルの位置からの相対的な位置を記述する方法
 * 同じディレクトリ（フォルダ）配下にあれば指定できる
 */
echo __DIR__ . '/../sub/file2.php'; // ディレクトリの場所を表示させる
// require '../file1.php'; // ./の場合は現在のディレクトリの位置を意味する 、../の場合はディレクトリを2コ遡る
// require './start/file1.php'; // startのファイルも読み込む指定
require __DIR__ . '/../start/sub/file2.php'; // ファイルのパス指定が適当になるが、一応接続できるらしい

/**
 * 絶対パスとは？：
 * 目的のファイルまでの全ての道筋を記述する方法
 */


/**
 * マジック定数とは？：
 * 使われる場所によって値が変化する定数（マジック定数）がいくつかあります。
 * 詳細 -> https://www.php.net/manual/ja/language.constants.magic.php
 */
// echo __DIR__ . ' <br>'; // ルートディレクトリを全部画面上に表示させる
// echo __FILE__ . ' <br>'; // 基本はDIRの時と同じ、異なる点はファイル名まで含めて表示される

/**
 * dirname とは？
 * フォルダの階層を表示させる関数
 * 詳細 -> https://www.php.net/manual/ja/function.dirname.php
 */