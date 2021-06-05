<?= include("assets/php/top.php"); ?>

<div class="clearfix"></div>
	
<div class="content-wrapper">
<div class="container-fluid">

    <div class="col-lg-12">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">顧客情報(発表用)</h5>
            <div class="table-responsive table-striped table-hover">

            <table class="table">
                <tr>
                    <th scope="col">顧客番号</th>
                    <th scope="col">正式名称</th>
                    <th scope="col">会社略名</th>
                    <th scope="col">締め日</th>
                    <th scope="col">請求書作成日</th>
                    <th scope="col">支払日</th>
                    <th scope="col">備考欄</th>
                    <th scope="col">操作</th>
                </tr>
                
                <?= include("select.php"); ?>
                
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>

<?= include("assets/php/bottom.php"); ?>