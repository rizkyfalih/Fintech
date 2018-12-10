<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Your receipt</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;12
        text-align: left;
        border-spacing: 0;
        border-collapse: collapse;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        /*font-weight: bold;*/
    }

    .text-align-right {
        text-align: right;
    }

    @media  only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table>
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="title">
                                
                                
                                INOSYS
                            </td>

                            <td>
                                Date: <?php echo date("Y-m-d"); ?><br>
                                Invoice ref.: <?php echo date("Y-m-d"); ?>-GKSJWD
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                            
                            </td>
                            <td>
                            <?php echo $this->session->userdata('email');?><br>
                            <?php echo $this->session->userdata('name');?>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Item</td>
                <td>Quantity</td>
                <td class="text-align-right">Individual Price</td>
            </tr>
            <?php foreach ($my_ticket as $ticket): ?>
                                                <tr class="item">
                                        <td><?php echo $ticket->nama_ticket; ?></td>
                        <td><?php echo $ticket->qty; ?></td>
                        <td class="text-align-right">IDR <?php echo $ticket->harga_ticket; ?></td>
                    </tr>
  <?php endforeach; ?>
            <tr class="total">
                <td></td>
                <td colspan="2">
                   <b>Total: IDR <?php echo $ticket->harga; ?></b><br />
                </td>
            </tr>

                    </table>
            <h4 class="text-align-left">Note:</h4>
            <p>Please bring this print out to pay the ticket and get the ticket</p>
    </div>
</body>
</html>