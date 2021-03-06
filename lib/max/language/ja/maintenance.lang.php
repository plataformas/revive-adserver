<?php

/*
  +---------------------------------------------------------------------------+
  | Revive Adserver                                                           |
  | http://www.revive-adserver.com                                            |
  |                                                                           |
  | Copyright: See the COPYRIGHT.txt file.                                    |
  | License: GPLv2 or later, see the LICENSE.txt file.                        |
  +---------------------------------------------------------------------------+
 */

// Main strings
$GLOBALS['strChooseSection'] = "セクションの選択";
$GLOBALS['strAppendCodes'] = "コードを追加する";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun'] = "<b>過去数時間の間、定期メンテナンス行われていません。設定を確認してください。</b>";

$GLOBALS['strAutoMantenaceEnabledAndHasntRun'] = "自動メンテナンスが有効ですが、動作していないようです。自動メンテナンスは、{$PRODUCT_NAME}がバナーを配信するときのみ動作します。 配信性能をベストな状態にするためには、<a href='{$PRODUCT_DOCSURL}/maintenance' target='_blank'>定期メンテナンス</a>を設定してください。";

$GLOBALS['strAutoMantenaceDisabledAndHasntRun'] = "自動メンテナンスは現在無効です。 {$PRODUCT_NAME}が配信したとしても、自動メンテナンスは起動しません。 ベストな状態を保つためには、<a href='{$PRODUCT_DOCSURL}/maintenance' target='_blank'>定期メンテナンス</a>を有効にして下さい。しかし、もし<a href='{$PRODUCT_DOCSURL}/maintenance' target='_blank'>定期メンテナンス</a>を有効にしないならば、<i>必ず</i> <a href='account-settings-maintenance.php'>自動メンテナンスを有効</a>にし、{$PRODUCT_NAME}が正常に動作するかを確認してください。'";

$GLOBALS['strAutoMantenaceEnabledAndRunning'] = "自動メンテナンスが有効ですが、動作していないようです。自動メンテナンスは、{$PRODUCT_NAME}がバナーを配信するときのみ動作します。 配信性能をベストな状態にするためには、<a href='{$PRODUCT_DOCSURL}/maintenance' target='_blank'>定期メンテナンス</a>を設定してください。";

$GLOBALS['strAutoMantenaceDisabledAndRunning'] = "自動メンテナンスが無効となっています。 {$PRODUCT_NAME}が正常に動作することを保障するためには、<a href='{$PRODUCT_DOCSURL}/maintenance' target='_blank'>定期メンテナンス</a>もしくは<a href='account-settings-maintenance.php'>自動メンテナンスを再開</a>して下さい。<br><br>ベストな状態を保つためには、 <a href='{$PRODUCT_DOCSURL}/maintenance' target='_blank'>定期メンテナンス</a>が必要です。";

$GLOBALS['strScheduledMantenaceRunning'] = "<b>定期メンテナンスは正常に動作しています。</b>";

$GLOBALS['strAutomaticMaintenanceHasRun'] = "<b>自動メンテナンスは正常に動作しています。</b>";

$GLOBALS['strAutoMantenaceEnabled'] = "自動メンテナンスが動作しています。ベストな状態を保つためには、<a href='account-settings-maintenance.php'>自動メンテナンスを無効</a>にして下さい。";


// Priority
$GLOBALS['strRecalculatePriority'] = "優先度の再計算";
$GLOBALS['strHighPriorityCampaigns'] = "高優先キャンペーン";
$GLOBALS['strAdViewsAssigned'] = "割当ビュー数";
$GLOBALS['strLowPriorityCampaigns'] = "低優先キャンペーン";
$GLOBALS['strPredictedAdViews'] = "予測ビュー数";
$GLOBALS['strPriorityDaysRunning'] = "{$PRODUCT_NAME}が日別予測の算出に利用可能な{days}日間の統計データがあります。";
$GLOBALS['strPriorityBasedLastWeek'] = "今週と先週のデータを使用して日別推移を予測しています。";
$GLOBALS['strPriorityBasedLastDays'] = "数日間のデータを使用して日別推移を予測しています。";
$GLOBALS['strPriorityBasedYesterday'] = "昨日のデータを使用して日別推移を予測しています。";
$GLOBALS['strPriorityNoData'] = "本日のインプレッション数を予測するのに十分なデータがありません。直近の統計結果に基づき優先度を割り当てます。";
$GLOBALS['strPriorityEnoughAdViews'] = "対象ゾーンには、全ての高優先キャンペーンを完全に満たすための一定以上のビュー数が必要です。";
$GLOBALS['strPriorityNotEnoughAdViews'] = "対象ゾーンには、全ての高優先キャンペーンを満たすための十分なビュー数がありませんでした。";


// Banner cache
$GLOBALS['strCheckBannerCache'] = "バナーキャッシュの構築";
$GLOBALS['strRebuildBannerCache'] = "バナーキャッシュの再構築";
$GLOBALS['strBannerCacheErrorsFound'] = "バナーキャッシュデータにエラーが検出されました。エラーを手作業で回復するまで、対象バナーは正しく動作しません。";
$GLOBALS['strBannerCacheOK'] = "バナーキャッシュデータにエラーは検出されませんでした。バナーキャッシュは最新に保たれています。";
$GLOBALS['strBannerCacheDifferencesFound'] = "バナーキャッシュデータに最新でなく再構築が必要なデータが検出されました。キャッシュを自動的に更新するには、ここをクリックしてください。";
$GLOBALS['strBannerCacheFixed'] = "バナーキャッシュの再構築が正常終了しました。バナーキャッシュは最新に保たれています。";
$GLOBALS['strBannerCacheRebuildButton'] = "再構築";
$GLOBALS['strRebuildDeliveryCache'] = "バナーキャッシュの再構築";
$GLOBALS['strBannerCacheExplaination'] = "　　　　バナーキャッシュは、バナーの配信速度向上のために使用します。<br />
　　　　バナーキャッシュの更新タイミングは以下のとおりです:
    <ul>
        <li>{$PRODUCT_NAME}のバージョンアップ時</li>
        <li>{$PRODUCT_NAME}のサーバ移転時</li>
    </ul>";

// Cache
$GLOBALS['strCache'] = "配信キャッシュ";
$GLOBALS['strAge'] = "キャッシュ寿命";
$GLOBALS['strDeliveryCacheSharedMem'] = "	配信キャッシュの保存用に'共有メモリ'を使用しています。";
$GLOBALS['strDeliveryCacheDatabase'] = "	配信キャッシュの保存用に'データベース'を使用しています。";
$GLOBALS['strDeliveryCacheFiles'] = "	配信キャッシュの保存用に'ファイル'を使用しています。";


// Storage
$GLOBALS['strStorage'] = "画像ストレージ";
$GLOBALS['strMoveToDirectory'] = "画像の保存先をデータベースからディレクトリに変更する";
$GLOBALS['strStorageExplaination'] = "	バナー用の画像は、データベースかディレクトリに保存します。
	画像をディレクトリに保存すると、CPU負荷が低下し、配信スピードが向上します。";

// Encoding
$GLOBALS['strEncoding'] = "エンコード形式";
$GLOBALS['strEncodingExplaination'] = "{$PRODUCT_NAME}  は全てのデータをUTF-8形式でデータベースに保存します。<br />可能な限り、使用者の入力内容はUTF-8に変換されます。<br />もしアップグレード後に文字化けが発生しているようであれば、こちらのツールを使用して、文字コードを変換して下さい。 ";
$GLOBALS['strEncodingConvertFrom'] = "変換元エンコード形式:";
$GLOBALS['strEncodingConvert'] = "変換する";
$GLOBALS['strEncodingConvertTest'] = "変換テスト";
$GLOBALS['strConvertThese'] = "続行すると、エンコード形式が変更されます。";


// Storage
$GLOBALS['strStatisticsExplaination'] = "	<i>コンパクト形式の統計</i>を有効にしましたが、過去の統計データは冗長形式で保存されています。
	過去の統計データを冗長形式からコンパクト形式に変換しますか？";


// Product Updates
$GLOBALS['strSearchingUpdates'] = "アップデートを検索しています。しばらくお待ちください...";
$GLOBALS['strAvailableUpdates'] = "アップデートを有効にする";
$GLOBALS['strDownloadZip'] = "ダウンロードする(.zip)";
$GLOBALS['strDownloadGZip'] = "ダウンロードする(.tar.gz)";

$GLOBALS['strUpdateAlert'] = "新しいバージョンの{$PRODUCT_NAME}がリリースされました。

アップデートしますか？";
$GLOBALS['strUpdateAlertSecurity'] = "新しいバージョンの{$PRODUCT_NAME}がリリースされました。

セキュリティ上のバグフィックスを含むため、アップデートを推薦します。";

$GLOBALS['strUpdateServerDown'] = "未知の理由によって、アップデート情報の照会ができません。<br>しばらくしてから再度アップデートを実行してください。";

$GLOBALS['strNoNewVersionAvailable'] = "あなたの{$PRODUCT_NAME}は最新です。現在のところ、新しいバージョンは存在しません。";



$GLOBALS['strNewVersionAvailable'] = "	<b>最新バージョンの{$PRODUCT_NAME}が利用可能です。</b><br />
	バグフィックスと最新機能追加のため、このアップデートをインストールすることを推奨します。<br />
	より詳しい情報はダウンロードファイルに含まれる以下のドキュメントを参照してください。";

$GLOBALS['strSecurityUpdate'] = "	<b>セキュリティフィックスのため、できるだけ速やかにこのアップデートをインストールすることを強く推奨します。</b>
	使用中の{$PRODUCT_NAME}のバージョンは、特定のセキュリティアタックから攻撃を受けやすく、安全ではありません。
	より詳しい情報はダウンロードファイルに含まれる以下のドキュメントを参照してください。
";

$GLOBALS['strNotAbleToCheck'] = "	<b>サーバのXML機能が利用できないため、{$PRODUCT_NAME}は最新バージョン<br />
	が利用可能であるかどうかのチェックができません。</b>";

$GLOBALS['strForUpdatesLookOnWebsite'] = "	新バージョンが利用可能か確認したい場合、{$PRODUCT_NAME}のサイトを訪問してください。";

$GLOBALS['strClickToVisitWebsite'] = "Webサイトへ";
$GLOBALS['strCurrentlyUsing'] = "使用中のバージョン：";
$GLOBALS['strRunningOn'] = "動作環境";
$GLOBALS['strAndPlain'] = "および";


// Stats conversion
$GLOBALS['strConverting'] = "変換中";
$GLOBALS['strConvertingStats'] = "統計データを変換中です...";
$GLOBALS['strConvertStats'] = "統計データの変換";
$GLOBALS['strConvertAdViews'] = "ビュー数を変換しました...";
$GLOBALS['strConvertAdClicks'] = "クリック数を変換しました...";
$GLOBALS['strConvertAdConversions'] = "コンバージョン数を変換しました...";
$GLOBALS['strConvertNothing'] = "変換対象のデータはありません...";
$GLOBALS['strConvertFinished'] = "統計データの変換が終了しました...";

$GLOBALS['strConvertExplaination'] = "	統計データは、コンパクト形式で保存されていますが、いくつかの冗長形式のデータが発見されました。<br />
	冗長形式をコンパクト形式に変換しない場合、その冗長形式のデータは、統計として適切に表示できません。<br />
	統計データを変換する前に、必ずデータベースをバックアップしてください！<br />
	冗長形式をコンパクト形式に変換しますか？<br />";

$GLOBALS['strConvertingExplaination'] = "	すべての冗長形式をコンパクト形式に変換しました。 <br />
	多くのデータ数が冗長形式で保存されているため、終了まであと数分間必要です。<br />
	このまま他のページに移動せず、変換が終了するまでしばらくお待ちください。<br />
	実施したすべての修正履歴は、以下で確認できます。<br />";

$GLOBALS['strConvertFinishedExplaination'] = "	冗長形式の統計データ変換が完了し、すべての統計データが利用可能になっています。<br />
	実施したすべての修正履歴は、以下で確認できます。<br />";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabled'] = "自動メンテナンスが無効です。";
$GLOBALS['strAutoMaintenanceEnabled'] = "自動メンテナンスが有効です。ベストな状態を保つために、<a href='settings-admin.php'>自動メンテナンスを無効</a>にして下さい。";
$GLOBALS['strScheduledMaintenance'] = "定期メンテナンスは正常に動作しています。";
$GLOBALS['strScheduledMaintenanceNotRun'] = "<b>過去数時間の間、定期メンテナンス行われていません。設定を確認してください。</b>";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered'] = "自動メンテナンスが有効ですが、動作していないようです。自動メンテナンスは{$PRODUCT_NAME}がバナーを配信しているときにのみ、動作します。";
$GLOBALS['strAutoMaintenanceBestPerformance'] = "ベストな状態をたもつために、<a href='{$PRODUCT_DOCSURL}/maintenance.html' target='_blank'>定期メンテナンス</a>を設定してください。";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger'] = "定期メンテナンスは有効です。一時間毎に動作します。";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "自動メンテナンスが無効ですが、メンテナンスが行われているようです。{$PRODUCT_NAME}が正常に動作しているか確認してください。また <a href='http://{$PRODUCT_DOCSURL}/maintenance.html' target='_blank'>定期メンテナンス</a>か<a href='settings-admin.php'>自動メンテナンス</a>を有効にして下さい。";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "自動メンテナンスも無効になっています。{$PRODUCT_NAME}のバナー配信時にメンテナンスは自動実行されません。<a href='http://{$PRODUCT_DOCSURL}/maintenance.html' target='_blank'>定期メンテナンス</a>を設定しない場合は、 <a href='settings-admin.php'>自動メンテナンスを有効</a>にし、 {$PRODUCT_NAME}が正常に動作していることを確認してください。";

//  Deliver Limitations
$GLOBALS['strAllBannerChannelCompiled'] = "すべての広告及びチャンネルの制限値が再集計されました。";
$GLOBALS['strBannerChannelResult'] = "これらはバナーとチャンネルの再集計結果です。";
$GLOBALS['strChannelCompiledLimitationsValid'] = "すべてのチャンネルの再集計は有効です";
$GLOBALS['strBannerCompiledLimitationsValid'] = "すべてのバナーの再集計は有効です";
$GLOBALS['strErrorsFound'] = "エラーがあります";
$GLOBALS['strRepairCompiledLimitations'] = "いくつか内容に矛盾があります。下記のボタンを使用して問題を修正してください。この設定は、すべてのバナー及びチャンネルの再集計に対する上限値を設定し直します。<br />";
$GLOBALS['strRecompile'] = "再集計";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "何らかの状況下において、配信エンジンがトラックコードを拒否しました。以下のリンクをたどって修正をして下さい。";
$GLOBALS['strCheckACLs'] = "ACLをチェックする";


//  Append codes
$GLOBALS['strAppendCodesDesc'] = "何らかの状況下において、配信エンジンがトラックコードを拒否しました。以下のリンクをたどって修正をして下さい。";
$GLOBALS['strCheckAppendCodes'] = "追加コードを確認";
$GLOBALS['strAppendCodesRecompiled'] = "すべて追加コードの値が再集計されました。";
$GLOBALS['strAppendCodesResult'] = "追加コードのチェック集計結果";
$GLOBALS['strAppendCodesValid'] = "全ての追跡コードは正常です。";
$GLOBALS['strRepairAppenedCodes'] = "何らかの問題が見つかりました。以下のボタンを使用して修正してください。これは全ての追跡コードの値を再集計します。";


