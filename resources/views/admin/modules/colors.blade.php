
<div class="animated fadeIn" ng-app="appme" ng-controller="colorController">
  
  <div class="row" ng-init="csrf = '{{csrf_token()}}'">
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
          <button class="btn btn-default" ng-click="newColor()" style="float: right;"><i class="fa fa-plus-square-o" style="font-style: 15px"></i></button>
        </div>
        <div class="card-body">
          <table id="table-colors" ng-table='colors' class="table table-striped table-bordered">
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
              <tr ng-repeat="data in $data" ng-init="data.show=true;"> 
                <td style="text-align:center">
                        {%$index+ 1%}
                </td>
                <td title="'Màu sắc'" style="text-align:center" filter="{ color: 'text'}" sortable="'color'">
                    <div ng-show="data.show && (data.new || data.new == null)" >
                       {%data.color%}
                    </div>
                    <div  ng-hide="data.show && (data.new || data.new == null)" >
                        <input type="text" ng-model="data.color" class="form-control">
                    </div>
                </td>
                <td style="text-align:center" title="'Id'" filter="{ id: 'number'}" sortable="'id'">
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
                <td style="text-align:center;color:red" ><i ng-click="change(data)" style="cursor: pointer;font-size: 25px" class="menu-icon "  ng-class="{'ti-save-alt':!(data.show && (data.new || data.new == null)),'ti-pencil':data.show && (data.new || data.new == null)}"></i></td>
                <td style="text-align:center;color:red"><i ng-click="delete(data)" style="cursor: pointer;font-size: 25px" class="menu-icon ti-trash"></i></td>
              </tr>
            
          </table>
        </div>
      </div>
    </div>


  </div>
</div><!-- .animated -->