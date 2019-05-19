
<div class="animated fadeIn" ng-app="appme" ng-controller="exController">

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <strong class="card-title" style="font-size:25px;color:darkblue"></strong>
        </div>
        <div class="card-body">
          <form ng-init="csrf='{{csrf_token()}}'" enctype="multipart/form-data">
            <div class="form-group col-sm-4">
              <label for="text" class=" form-control-label">
                <b>Chữ hiện thị</b>
              </label>
              <input type="text" id="text" ng-model='text' placeholder="Chữ hiện thị" class="form-control">
            </div>
            
            <div class="form-group col-sm-4">
             <label for="type" class=" form-control-label">
                <b>Loại</b>
              </label>
              <input type="number" id="type" ng-model='type' placeholder="Loại" class="form-control">
            </div>

            <div class="col-sm-4 form-group">

              <label for="link" class=" form-control-label">
                <b>Link truy cập</b>
              </label>

              <input type="text" id="link" ng-model='link' placeholder="Link truy cập" class="form-control">

            </div>
            <div class="form-group col-sm-3">
              <label style="font-weight:bold" for="image_file" class=" form-control-label">
                Ảnh đại diện
              </label>
              <input type="file" ng-files="setTheFiles($files)" class="form-control imagefile">
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
          <strong class="card-title">Thông tin thêm</strong>
          <!-- <button class="btn btn-default" ng-click="new()" style="float: right;"><i class="fa fa-plus-square-o" style="font-style: 15px"></i></button> -->
        </div>
        <div class="card-body">
          <table id="table-ex" ng-table='ex' class="table table-striped table-bordered">
          <colgroup>
            <col width="5%" />
            <col width="20%" />
            <col width="20%" />
            <col width="20%" />
            <col width="20%" />
            <col width="5%" />
            <col width="5%" />
            <col width="5%" />
          </colgroup>
              <tr ng-repeat="data in $data" ng-init="data.show=true;"> 
                <td>
                        {%$index+ 1%}
                </td>
                <td title="'Image'" filter="{ image: 'text'}" sortable="'image'">
                    <div ng-show="data.show " >
                       <a href="/storage/{%data.image%}" target="_blank">{%data.image%}</a>
                    </div>
                    <div  ng-hide="data.show" >
                         <input type="file" ng-files="setTheFiles($files)" class="form-control imagefile">
                    </div>
                </td>
                <td title="'Chữ hiện thị'" filter="{ text: 'text'}" sortable="'text'">
                    <div ng-show="data.show " >
                       {%data.text%}
                    </div>
                    <div  ng-hide="data.show" >
                        <input type="text" ng-model="data.text" class="form-control" >
                    </div>
                </td>
                <td title="'Loại'" filter="{ type: 'text'}" sortable="'type'">
                    <div ng-show="data.show " >
                       {%data.type%}
                    </div>
                    <div  ng-hide="data.show" >
                        <input type="text" ng-model="data.type" class="form-control" >
                    </div>
                </td>
                <td title="'Link'" filter="{ link: 'text'}" sortable="'link'">
                    <div ng-show="data.show " >
                       <a href="/storage/{%data.link%}" target="_blank">{%data.link%}</a>
                    </div>
                    <div  ng-hide="data.show" >
                        <input type="text" ng-model="data.link" class="form-control" >
                    </div>
                </td>
                <td title="'Id'" filter="{ id: 'number'}" sortable="'id'">
                    {%data.id%}
                </td>
                <!-- <td title="'Link ảnh'" filter="disabled" sortable="'links'" >
                    <div ng-show="data.show " >
                       <div ng-repeat="link in data.links"><a href="/storage/{%link.link%}" target="_blank">{%link.link%}</a></div>
                    </div>
                    <div  ng-hide="data.show" >
                        <input type="file" ng-files="setTheFiles($files)" class="form-control imagefile" multiple>
                    </div>
                </td> -->

                <td style="color:darkblue"><i ng-click="change(data)" style="cursor: pointer;font-size: 30px" class="menu-icon " ng-class="{'ti-save-alt':!(data.show ),'ti-pencil':data.show }"></i></td>
                <td style="color:darkblue"><i ng-click="delete(data)" style="cursor: pointer;font-size: 30px" class="menu-icon ti-trash"></i></td>

              </tr>
            
          </table>
        </div>
      </div>
    </div>


  </div>
</div><!-- .animated -->