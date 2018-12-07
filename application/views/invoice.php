<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ISAAX IoT | 請求書</title>

    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
        padding-left: 1em;
        padding-right: 1em;
    }
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    .invoice-box table tr.tax td{
        font-weight:bold;
        color: #888;
    }
    .invoice-box table tr.total td{
        border-bottom:2px solid #eee;
        font-weight:bold;
    }
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="images/isaax_logo_128.png" style="width:100%; max-width:128px;">
                            </td>

                            <td>
                                 #: 123<br>
                                発行日: 2016年11月01日<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <b>株式会社XSHELL</b><br />
                                〒141-0031<br />
                                東京都品川区<br />
                                西五反田1丁目26-2 308
                            </td>

                            <td>
                                ユーザー名<br>
                                03-0000-0000<br>
                                user@example.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td colspan="2">
                    支払方法
                </td>
            </tr>

            <tr class="details">
                <td colspan="2">
                    銀行振込 | クレジットカード：　口座詳細 | VISA -xxxx
                </td>
            </tr>

            <tr class="heading">
                <td>
                    項目
                </td>

                <td>
                    価格

                </td>
            </tr>

            <tr class="item">
                <td>
                    料金プラン
                </td>

                <td>
                    ¥ 1,000
                </td>
            </tr>

            <tr class="item">
                <td>
                    オプション：(オプション詳細)
                </td>

                <td>
                    ¥ 1,000
                </td>
            </tr>

            <tr class="tax">
                <td>
                    消費税 (var)
                </td>

                <td>
                    ¥ 160
                </td>
            </tr>

            <tr class="total">
                <td>
                  合計:
                </td>

                <td>
                    ¥ 2,160
                </td>
            </tr>
        </table>
    </div>
</body>
</html>