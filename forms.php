<?= include("assets/php/top.php"); ?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">

      <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <div class="card-title">顧客登録</div>
            <hr>

              <!-- ================================ insert.phpへPOST、SQLに突っ込むぜ！================================ -->
              <form method="POST" action="insert.php">

                <!-- 1列目 -->
                <div class="form-group" style="display: flex;">
                  <input name="clientOfficialName" placeholder="正式名称"     type="text" class="form-control" id="input-1" style="width: 49%; margin-right: 2%;">
                  <input name="clientNickName"     placeholder="会社略名"     type="text" class="form-control" id="input-2" style="width: 49%;">
                </div>
                
                <!-- 2列目 -->
                <div class="form-group" style="display: flex;">
                  <input name="closingDay"         placeholder="締め日"       type="text" class="form-control" id="input-3" style="width: 49%; margin-right: 2%;">
                  <input name="makingInvoiceDay"   placeholder="請求書作成日" type="text" class="form-control" id="input-4" style="width: 49%;">
                </div>

                <!-- 3列目 -->
                <div class="form-group" style="display: flex;">
                  <input name="sedingMoneyDay"     placeholder="支払日"       type="text" class="form-control" id="input-5" style="width: 49%; margin-right: 2%;">
                  <input name="gaiyou"             placeholder="概要欄"       type="text" class="form-control" id="input-6" style="width: 49%;">
                </div>

                <p>↑一回ここまでで、SQLに入るかどうか確認！================================================================</p>

                <div class="form-group">
                  <button type="submit" class="btn btn-light px-5"><i class="icon-register"></i> 登録する</button>
                </div>
            </form>
          </div>
          </div>

      </div>
        <div class="overlay toggle-menu"></div>
      </div>      
    </div>
    
<?= include("assets/php/bottom.php"); ?>