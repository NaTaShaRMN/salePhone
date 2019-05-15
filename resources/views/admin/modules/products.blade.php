<style>
.dataTables_filter{
  float: right;
}
.pull-right {
    float: right!important;
}
.btn-group{
    position: relative;
    display: inline-block;
    vertical-align: middle;
}
.pagination {
    /*display: inline-block;*/
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
}
.pagination>li {
    display: inline;
}

.pagination>li>a{
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.428571429;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}

.pagination>li:last-child>a{
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.pagination>li:first-child>a, .pagination>li:first-child>span {
    margin-left: 0;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
}
.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.btn-group>.btn-group:not(:last-child)>.btn, .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.btn-group>.btn:first-child {
    margin-left: 0;
}
.btn:not([disabled]):not(.disabled).active, .btn:not([disabled]):not(.disabled):active {
    background-image: none;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.428571429;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
.btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}
.btn:not([disabled]):not(.disabled) {
    cursor: pointer;
}
.btn-group>.btn, .btn-group-vertical>.btn {
    position: relative;
    float: left;
}
.btn-group .btn+.btn, .btn-group .btn+.btn-group, .btn-group .btn-group+.btn, .btn-group .btn-group+.btn-group {
    margin-left: -1px;
}
.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus {
    z-index: 2;
    color: #fff;
    cursor: default;
    background-color: #428bca;
    border-color: #428bca;
}
.pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.428571429;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
a {
    color: #428bca;
    text-decoration: none;
}
.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
    color: #333;
    background-color: #ebebeb;
    border-color: #adadad;
}
.btn:active, .btn.active {
    background-image: none;
    outline: 0;
    -webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,0.125);
    box-shadow: inset 0 3px 5px rgba(0,0,0,0.125);
}
</style>
<div class="animated fadeIn" ng-app="appme" ng-controller="productController">

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Thêm mới sản phẩm</strong>
        </div>
        <div class="card-body">
          <form ng-init="csrf='{{csrf_token()}}'" enctype="multipart/form-data">
            <div class="form-group col-sm-4">
              <label for="name" class=" form-control-label">
                <b>Tên sản phẩm</b>
              </label>
              <input type="text" id="name" ng-model='name' placeholder="Tên sản phẩm" class="form-control">
            </div>
			
			<div class="form-group col-sm-4">
              <label for="price" class=" form-control-label">
                <b> Giá tiền</b>
              </label>
              <input type="number" min="0" id="price" ng-model='price' placeholder="Số tiền " class="form-control">
            </div>

            <div class="form-group col-sm-4">
              <label for="sale" class="form-control-label">
                 <b>Giảm giá</b>
              </label>
              <input type="number" min="0" id="sale" ng-model='sale' placeholder="Số tiền" class="form-control">
            </div>
			
			<div class="form-group col-sm-4">
              <label for="quantity" class=" form-control-label">
                 <b>Số lượng trong kho</b>
              </label>
              <input type="number" min="0" id="quantity" ng-model='quantity' placeholder="Số lượng trong kho" class="form-control">
            </div>

            <div class="col-sm-4 form-group">
              <label for="" class=" form-control-label">
                 <b>Nhãn hiệu</b>
              </label>
              <select class="form-control " 
              ng-options="option.name for option in brands track by option.id"
              ng-model="brand">
              <option value="">Chọn nhãn hiệu</option>
              </select>
            </div>

            <div class="col-sm-4 form-group">
              <label for="" class=" form-control-label">
                 <b>Màu sắc</b>
              </label>
              <!-- <select class="form-control " 
              ng-options="option.color for option in colors track by option.id"
              ng-model="color">
              <option value="">Chọn màu sắc</option>
              </select> -->
              <div ng-dropdown-multiselect="" options="colors" selected-model="color" extra-settings="colorSetting"></div>
              <!-- <div ng-dropdown-multiselect="" options="example6data" selected-model="example6model" extra-settings="example6settings"></div> -->
              
            </div>
			
			<div class="col-sm-3 form-group">
              <label for="" class=" form-control-label">
                <b> Kích thước màn hình</b>
              </label>
              <select class="form-control " 
              ng-options="option.size for option in displays track by option.id"
              ng-model="display">
              <option value="">Chọn kích thước</option>
              </select>
            </div>
			
			<div class="col-sm-3 form-group">
              <label for="" class=" form-control-label">
                <b> Hệ điều hành</b>
              </label>
              <select class="form-control " 
              ng-options="option.name for option in ops track by option.id"
              ng-model="op">
              <option value="">Chọn hệ điều hành</option>
              </select>
            </div>
			
			<div class="col-sm-3 form-group">
              <label for="" class=" form-control-label">
                <b> Bộ nhớ</b>
              </label>
              <select class="form-control " 
              ng-options="option.size for option in storages track by option.id"
              ng-model="storage">
              <option value="">Chọn bộ nhớ</option>
              </select>
            </div>

			     <div class="form-group col-sm-3">
              <label for="image_file" class=" form-control-label">
                Ảnh đại diện
              </label>
              <input type="file" ng-files="setTheFiles($files)" class="form-control imagefile" multiple>
              </div>

            <div class="form-group col-sm-12">
              <label for="id6" class=" form-control-label">
                 <b>Mô tả</b>
              </label>
              <textarea name="" id="id6" cols="30" rows="5" ng-model="description" class="form-control"></textarea>
              <!-- <input type="text" id="id6" ng-model='tenDanhMuc' placeholder="Tên danh mục" class="form-control"> -->
            </div>

            
          </form>
         </div>
         <div class="card-footer">
	          <button type="button" class="btn btn-primary btn-sm"  ng-click="new()">
	            <i class="fa fa-dot-circle-o"></i> Tạo mới
	          </button>
	          <button type="reset" class="btn btn-danger btn-sm" ng-click="reset()">
	            <i class="fa fa-ban"></i> Reset
	          </button>
	      </div>
      </div>
    </div>
   </div>
  <div class="row" ng-init="csrf = '{{csrf_token()}}'">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Bộ nhớ trong</strong>
          <!-- <button class="btn btn-default" ng-click="new()" style="float: right;"><i class="fa fa-plus-square-o" style="font-style: 15px"></i></button> -->
        </div>
        <div class="card-body">
          <table id="table-product" ng-table='product' class="table table-striped table-bordered">
          <colgroup>
            <col width="3%" />
            <col width="10%" />
            <col width="3%" />
            <col width="4%" />
            <col width="5%" />
            <col width="5%" />
            <col width="10%" />
            <col width="10%" />
            <col width="10%" />
            <col width="10%" />
            <col width="10%" />
            <col width="5%" />
            <col width="5%" />
            <col width="5%" />
            <col width="5%" />
          </colgroup>
              <tr ng-repeat="data in $data" ng-init="data.show=true;"> 
                <td>
                        {%$index+ 1%}
                </td>
                <td title="'Tên sản phẩm'" filter="{ name: 'text'}" sortable="'name'">
                    <div ng-show="data.show " >
                       {%data.name%}
                    </div>
                    <div  ng-hide="data.show " >
                        <input type="text" ng-model="data.name" class="form-control" >
                    </div>
                </td>
                <td title="'Id'" filter="{ id: 'number'}" sortable="'id'">
                       {%data.id%}
                </td>
                <td title="'Giá'" filter="{ price: 'number'}" sortable="'price'">
                    <div ng-show="data.show " >
                       {%data.price%}
                    </div>
                    <div  ng-hide="data.show" >
                        <input type="number" ng-model="data.price" class="form-control" >
                    </div>
                </td>

                <td title="'Sale'" filter="{ sale: 'number'}" sortable="'sale'">
                    <div ng-show="data.show " >
                       {%data.sale%}
                    </div>
                    <div  ng-hide="data.show" >
                        <input type="number" ng-model="data.sale" class="form-control" >
                    </div>
                </td>
                
                <td title="'Số lượng'" filter="{ quantity: 'number'}" sortable="'quantity'">
                    <div ng-show="data.show " >
                       {%data.quantity%}
                    </div>
                    <div  ng-hide="data.show" >
                        <input type="number" ng-model="data.quantity" class="form-control" >
                    </div>
                </td>
                
                <td title="'Nhãn hiệu'" filter="{ brand: 'text'}" sortable="'brand'">
                    <div ng-show="data.show " >
                       {%data.brand%}
                    </div>
                    <div  ng-hide="data.show" >
                        <select class="form-control " 
                          ng-options="option.name for option in brands track by option.id"
                          ng-model="data.brand_sl">
                        <option value=""><b>{%data.brand%}<b></option>
                        </select>
                    </div>
                </td>

                <td title="'Màn hình'" filter="{ display: 'text'}" sortable="'display'">
                    <div ng-show="data.show " >
                       {%data.display%}
                    </div>
                    <div  ng-hide="data.show" >
                        <select class="form-control " 
                          ng-options="option.size for option in displays track by option.id"
                          ng-model="data.display_sl">
                        <option value=""><b>{%data.display%}<b></option>
                        </select>
                    </div>
                </td>

                <td title="'Bộ nhớ'" filter="{ storage: 'text'}" sortable="'storage'">
                    <div ng-show="data.show " >
                       {%data.storage%}
                    </div>
                    <div  ng-hide="data.show" >
                        <select class="form-control " 
                          ng-options="option.size for option in storages track by option.id"
                          ng-model="data.storage_sl">
                        <option value=""><b>{%data.storage%}</b></option>
                        </select>
                    </div>
                </td>

                <td title="'HĐH'" filter="{ operating_system: 'text'}" sortable="'operating_system'">
                    <div ng-show="data.show " >
                       {%data.operating_system%}
                    </div>
                    <div  ng-hide="data.show" >
                        <select class="form-control " 
                          ng-options="option.name for option in ops track by option.id"
                          ng-model="data.operating_system_sl">
                        <option value=""><b>{%data.operating_system%}<b></option>
                        </select>
                    </div>
                </td>
                  
                <td title="'Màu sắc'" filter="disabled" sortable="'colors'" ng-init="data.color_sl = []">
                    <div ng-show="data.show " >
                       <div ng-repeat="color in data.colors">{%color.color%}</div>
                    </div>
                    <div  ng-hide="data.show" >
                        <div ng-dropdown-multiselect="" options="colors" selected-model="data.color_sl" extra-settings="colorSetting"></div>
                    </div>
                </td>

                <td title="'Mô tả'" filter="{ description: 'text'}" sortable="'description'">
                    <div ng-show="data.show " >
                       {%data.description%}
                    </div>
                    <div  ng-hide="data.show" >
                        <input type="text" ng-model="data.description" class="form-control" >
                    </div>
                </td>

                <td title="'Link ảnh'" filter="disabled" sortable="'links'" >
                    <div ng-show="data.show " >
                       <div ng-repeat="link in data.links"><a href="/storage/{%link.link%}" target="_blank">{%link.link%}</a></div>
                    </div>
                    <div  ng-hide="data.show" >
                        <input type="file" ng-files="setTheFiles($files)" class="form-control imagefile" multiple>
                    </div>
                </td>
                <td ><i ng-click="change(data)" style="cursor: pointer;font-size: 25px" class="menu-icon " ng-class="{'ti-save-alt':!(data.show ),'ti-pencil':data.show }"></i></td>
                <td><i ng-click="delete(data)" style="cursor: pointer;font-size: 25px" class="menu-icon ti-trash"></i></td>
              </tr>
            
          </table>
        </div>
      </div>
    </div>


  </div>
</div><!-- .animated -->