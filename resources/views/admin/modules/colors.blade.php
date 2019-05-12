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
<div class="animated fadeIn" ng-app="appme" ng-controller="colorController">
  
  <div class="row">
  <!--   <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">tdêm mới danh mục</strong>
        </div>
        <div class="card-body">
          <form ng-init="csrf='{{csrf_token()}}'">
            <div class="form-group">
              <label for="loaidanhmuc" class=" form-control-label">
              Tên danh mục
              </label>
              <input type="text" id="loaidanhmuc" ng-model='tenDanhMuc' placeholder="Tên danh mục" class="form-control">
              </div>
              <select  placeholder="Chọn loại danh muc..." class="Select form-control">
                  <option value="0" selected="true" > chọn danh mục</option>
                  <option ng-repeat="ldm in loaidanhmuc" value="{%ldm.id%}">{%ldm.tenloaidanhmuc%}</option>
              </select>
  
               <select class="form-control" 
                ng-options="option.tenloaidanhmuc for option in loaidanhmuc track by option.id"
                ng-model="select">
                  <option value="">Chọn loại danh mục</option>
                </select>
              
          </form>
        </div>
         <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm" ng-click="taomoi()">
                    <i class="fa fa-dot-circle-o"></i> Tạo mới
                  </button>
                  <button type="reset" class="btn btn-danger btn-sm" ng-click="reset()">
                    <i class="fa fa-ban"></i> Reset
                  </button>
              </div>
      </div>
    </div>-->
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Màu sắc</strong>
          <button class="btn btn-default" ng-click="taomoi()" style="float: right;"><i class="fa fa-plus-square-o" style="font-style: 15px"></i></button>
        </div>
        <div class="card-body">
          <table id="table-danhmuc" ng-table='danhmuc' class="table table-striped table-bordered">
            <!-- <tdead>
              <tr>
                <td>#</td>
                <td>Tên danh mục</td>
                <td>Mã số</td>
                <td>Số sản phẩm</td>
                <td>Loại danh mục</td>
                <td>Sửa</td>
                <td>Xóa</td>
              </tr>
            </tdead> -->
          <colgroup>
            <col width="5%" />
            <col width="40%" />
            <col width="35%" />
            <col width="10%" />
            <col width="10%" />
          </colgroup>
              <tr ng-repeat="data in $data" ng-init="data.show=true"> 
                <td>
                        {%$index+ 1%}
                </td>
                <td title="'Màu sắc'" filter="{ tendanhmuc: 'text'}" sortable="'tendanhmuc'">
                    <div ng-show="data.show && data.new" >
                       {%data.tendanhmuc%}
                    </div>
                    <div  ng-hide="data.show && data.new" >
                        <input type="text" ng-model="data.tendanhmuc" class="form-control">
                    </div>
                </td>
                <td title="'Id'" filter="{ id: 'number'}" sortable="'id'">
                    {%data.id%}
                </td>
                <!-- <td title="'Loại danh mục'" filter="{ showTen: 'text'}" sortable="'showTen'">
                    <div ng-show="data.show" >
                        {%data.showTen%}
                    </div>
                    <div  ng-hide="data.show" >
                        <select class="form-control" 
                        ng-options="option.tenloaidanhmuc for option in loaidanhmuc track by option.id"
                        ng-model="data.loaidanhmuc_id">
                        </select>
                    </div>
                </td> -->
                <td ><i ng-click="change(data)" style="cursor: pointer;font-size: 25px" class="menu-icon " ng-class="{'ti-save-alt':!(data.show && data.new),'ti-pencil':data.show && data.new}"></i></td>
                <td><i ng-click="delete(data)" style="cursor: pointer;font-size: 25px" class="menu-icon ti-trash"></i></td>
              </tr>
            
          </table>
        </div>
      </div>
    </div>


  </div>
</div><!-- .animated -->