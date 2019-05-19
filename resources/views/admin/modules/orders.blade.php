
<div class="animated fadeIn" ng-app="appme" ng-controller="orderController">
  
  <div class="row" ng-init="csrf = '{{csrf_token()}}'">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Đơn đặt hàng</strong>
          <button class="btn btn-default" ng-click="new()" style="float: right;"><i class="fa fa-plus-square-o" style="font-style: 15px"></i></button>
        </div>
        <div class="card-body">
          <table id="table-order" ng-table='order' class="table table-striped table-bordered">
          <colgroup>
            <col width="5%" />
            <col width="20%" />
            <col width="10%" />
            <col width="25%" />
            <col width="15%" />
            <col width="15%" />
            <col width="10%" />
            <!-- <col width="10%" /> -->
          </colgroup>
              <tr ng-repeat="data in $data" ng-init="data.show=true;"> 
                <td style="text-align:center">
                        {%$index+ 1%}
                </td>
                <td title="'Tên tài khoản'" style="text-align:center" filter="{ user_name: 'text'}" sortable="'user_name'">
                    <div ng-show="data.show" >
                       {%data.user_name%}
                    </div>
                    <div  ng-hide="data.show" >
                        <input type="text" ng-model="data.user_name" class="form-control" >
                    </div>
                </td>
                <td title="'Id ND'" style="text-align:center" filter="{ user_id: 'number'}" sortable="'user_id'">
                    <div ng-show="data.show " >
                       {%data.user_id%}
                    </div>
                    <div  ng-hide="data.show " >
                        <input type="number" ng-model="data.user_id" class="form-control" >
                    </div>
                </td>
                <td title="'Id'" style="text-align:center" filter="{ id: 'number'}" sortable="'id'">
                    {%data.id%}
                </td>
                <td title="'Tổng tiền'" style="text-align:center" filter="{ amount: 'number'}" sortable="'amount'">
                    {%data.amount%}
                </td>
                <td title="'Trạng thái'" style="text-align:center" filter="{ status: 'number'}" sortable="'status'">
                    {%data.status ? 'Đã xong' : 'Chưa xong'%}
                </td>
				<td title="'Ngày đặt'" style="text-align:center" filter="{ create_at: 'number'}" sortable="'create_at'">
                    {%data.create_at%}
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

                <!-- <td style="text-align:center;color:red"><i ng-click="change(data)" style="cursor: pointer;font-size: 25px" class="menu-icon " ng-class="{'ti-save-alt':!(data.show ),'ti-pencil':data.show }"></i></td>
                <td style="text-align:center;color:red"><i ng-click="delete(data)" style="cursor: pointer;font-size: 25px" class="menu-icon ti-trash"></i></td> -->
              </tr>
            
          </table>
        </div>
      </div>
    </div>


  </div>
</div><!-- .animated -->