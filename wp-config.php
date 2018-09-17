<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'my_note');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'akihiro');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'fgprs339');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Up];LS`.!j{8_YG_~6{1^U:{Mqzw&IeNhH-h`mQ+Zbs/!#GCp-o0fUn5LuaUd|5P');
define('SECURE_AUTH_KEY',  '3_zQ:gM_+Fu^ReK/`puWNr%#|#q<k<a$0:m3v4L;R]%7DxCj^P6R)ck~#29)~%21');
define('LOGGED_IN_KEY',    'L:dS6b)Xh5x>%#|7saR@d!/pe!|^`xUd>;MvDk.3psh[G;xL(@00)w5cP@`1^?MC');
define('NONCE_KEY',        '&=4y:UV}q6r7%xvY/3+[&7,w-zYij=88@}.EbW^9?+pCAQ*A(fMXTNccy;abp%Sh');
define('AUTH_SALT',        'H5Lsle~A7@h@ad;skR_jqx!f)cf6k[63Iv.p-8X#Em4Gd!SK2Wybp7yf:HAezOh2');
define('SECURE_AUTH_SALT', '?U$(s<4e *L#AIOd.wYeZxTehu=yT}p+Q]+;`6GsOnoB=M?&W w?%Y%UM5IExmh`');
define('LOGGED_IN_SALT',   '/y }iVN3Wq`R~)2[;8rI/1?2Y)P(HkBi#Y)[/v:hY9syM!;o,5oR9{<e7,L^*k%q');
define('NONCE_SALT',       '</u|h0<g!,rcd4+8JeTIo|IMubzHi8@^rQD[gPx,U*+wN~TRS3JgC^uhJKrousoN');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
