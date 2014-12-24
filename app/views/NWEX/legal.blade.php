@extends('layouts.master')
@section('title', '特定商取引法に基づく表示')
@section('content')
@include('NWEX.partials.breadcrumb', array('breadcrumbs' => array('特定商取引法に基づく表示')))
@include('NWEX.partials.information', array('show' => false))
<div class="container">
<div class="row">
	<div class="legal-wrapper">
<dl>
	<dt>店舗名</dt>
	<dd>NWEX</dd>
</dl>
<dl>
	<dt>販売業者</dt>
	<dd>株式会社プロジェクトケーNW事業部</dd>
</dl>
<dl>
	<dt>運営責任者</dt>
	<dd>荒武美由紀</dd>
</dl>
<dl>
	<dt>本店所在地</dt>
	<dd>横浜市中区長者町5-75-1　スクエア長者町201（城南信金２階）</dd>
</dl>
<dl>
	<dt>代表電話</dt>
	<dd>045(253)9129（代）</dd>
</dl>
<dl>
	<dt>FAX</dt>
	<dd>045(242)8373</dd>
</dl>
<dl>
	<dt>販売方法</dt>
	<dd><p>ホームページ注文・ＦＡＸ・電子メールでご注文を受付</p>
		<span class="text-danger">現在、お電話によるご注文は承っておりません。</span>
	</dd>
</dl>
<dl>
	<dt>配送方法</dt>
	<dd>沖縄、離島以外原則佐川急便による配送</dd>
</dl>
<dl>
	<dt>納期目安</dt>
	<dd><p>日付指定のない場合、
在庫製品は原則として当日または翌営業日以内に発送</p>
<span class="text-danger">
カード決済が確認出来ない場合は、別途ご案内申しあげます。
</span></dd>
</dl>
<dl>
	<dt>宅配費用</dt>
	<dd>
	<ul class="list-unstyled"><li>本州・四国：840円</li>
	<li>北海道・九州：1,050円</li>
	<li>沖縄・離島　1,470円</li>
<li>送料無料アイテム購入時は無料</li>
</ul>
</dd>
</dl>
<dl>
	<dt>消費税について</dt>
	<dd>全ての商品は消費税8%を含む価格表示です</dd>
</dl>
<dl>
	<dt>キャンセル</dt>
	<dd>
	<p>商品の品質については万全を期しておりますが、万一商品が破損・汚損していた場合、 又はご注文と異なる場合は、原則として商品到着後８日以内に、まず弊社へお電話にてお知らせ下さい。 不良品の場合、良品と交換（在庫のある場合）または返金させて頂きます。
</p>
	</dd>
</dl>
<dl>
	<dt>お支払い方法</dt>
	<dd>代金引換(現金のみ)またはクレジットカード決済</dd>
</dl>
<dl>
	<dt>古物商許可</dt>
	<dd>神奈川県公安委員会　第451360010398号</dd>
</dl>
<dl>
	<dt>QRコード</dt>
	<dd style="text-align: center;">{{ HTML::image('img/QRCode.gif')}}</dd>
</dl>
</div>
</div>
</div>
@stop