
<div class="animated fadeIn" ng-app="appme" ng-controller="imageController">
  
  <div class="row" ng-init="csrf = '{{csrf_token()}}'">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Nhãn hiệu</strong>
          <button class="btn btn-default" ng-click="new()" style="float: right;"><i class="fa fa-plus-square-o" style="font-style: 15px"></i></button>
        </div>
        <div class="card-body">
          <table id="table-image" ng-table='image' class="table table-striped table-bordered">
          <colgroup>
            <col width="5%" />
            <col width="30%" />
            <col width="25%" />
            <col width="20%" />
            <col width="10%" />
            <col width="10%" />
          </colgroup>
              <tr ng-repeat="data in $data" ng-init="data.show=true;"> 
                <td style="text-align:center">
                        {%$index+ 1%}
                </td>
                <td title="'Ảnh'" style="text-align:center" filter="{ link: 'text'}" sortable="'link'">
                    <div ng-show="data.show && (data.new || data.new == null)" >
                       {%data.link%}
                    </div>
                    <div  ng-hide="data.show && (data.new || data.new == null)" >
                        <input type="text" ng-model="data.link" class="form-control" >
                    </div>
                </td>
                <td title="'Id'" style="text-align:center" filter="{ id: 'number'}" sortable="'id'">
                    {%data.id%}
                </td>
                <td title="'Mã Sp'" style="text-align:center" filter="{ product_id: 'number'}" sortable="'product_id'">
                    <div ng-show="data.show && (data.new || data.new == null)" >
						 {%data.product_id%}
                    </div>
					<div  ng-hide="data.show && (data.new || data.new == null)" >
                        <input type="text" ng-model="data.link" class="form-control" >
                    </div>
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
                <td style="text-align:center;color:red"><i ng-click="change(data)" style="cursor: pointer;font-size: 25px" class="menu-icon " ng-class="{'ti-save-alt':!(data.show && (data.new || data.new == null)),'ti-pencil':data.show && (data.new || data.new == null)}"></i></td>
                <td style="text-align:center;color:red"><i ng-click="delete(data)" style="cursor: pointer;font-size: 25px" class="menu-icon ti-trash"></i></td>
              </tr>
            
          </table>
        </div>
      </div>
    </div>


  </div>
</div><!-- .animated -->