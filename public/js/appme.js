var app = angular.module('appme', ["ngTable","angularjs-dropdown-multiselect"] ,function($interpolateProvider) {
	$interpolateProvider.startSymbol('{%');
	$interpolateProvider.endSymbol('%}');
});

app.controller('colorController',['$scope','$http','NgTableParams', function colorController($scope,$http,NgTableParams){
	
	this.$onInit = function() {
		$scope.datas= [];
		$http.get('admin/color_information').then((req) => {
			$scope.datas = req.data;
			$scope.colors = new NgTableParams({}, { dataset: $scope.datas});
		});	
	}
	$scope.reset = ()=>{
		$scope.tenLoaiDanhMuc='';
	}
	$scope.newColor = ()=>{
		$scope.datas.unshift({color:'',id: 'NULL',new:false});
		$scope.colors = new NgTableParams({}, { dataset: $scope.datas});
	}
	$scope.change = (data)=>{
		if(data.new == false) {
			 $http.post('admin/color',{
				_token: $scope.csrf,
				color: data.color
			},{header : {'Content-Type' : 'application/json; charset=UTF-8'}})
			.then( (req) => {
				console.log(req.data);
				if( req.data ){
					data.id = req.data.id;
				}
			})
			data.new = true;
		}else{
			
			if(!data.show){
				// console.log(data.id);
				$http.post('admin/color_edit',{
					_token: $scope.csrf,
					id: data.id,
					color: data.color
				}).then((req)=>{
					data.color = req.data.color;
				})
			}
			data.show = !data.show;
		}
		
	}
	$scope.delete = (data)=>{
		var index = $scope.datas.indexOf(data);
		if(index >= 0 ){
			$scope.datas.splice(index,1);
			$scope.colors = new NgTableParams({}, { dataset: $scope.datas});
			$http.post('admin/color_delete',{
				_token : $scope.csrf,
				id: data.id
			}).then((req)=>{
				console.log(req);
			})
		}
	}
}])

app.controller('displayController',['$scope','$http','NgTableParams', function displayController($scope,$http,NgTableParams){
	this.$onInit = function() {
		$scope.datas= [];
		$http.get('admin/display_information').then((req) => {
			$scope.datas = req.data;
			$scope.displays = new NgTableParams({}, { dataset: $scope.datas});
		});
	}
	$scope.new = ()=>{
		$scope.datas.unshift({size:'',id: 'NULL',new:false});
		$scope.displays = new NgTableParams({}, { dataset: $scope.datas});
	}
	$scope.change = (data)=>{
		if(data.new == false) {
			 $http.post('admin/display',{
				_token: $scope.csrf,
				size: data.size
			},{header : {'Content-Type' : 'application/json; charset=UTF-8'}})
			.then( (req) => {
				console.log(req.data);
				if( req.data ){
					data.id = req.data.id;
				}
			})
			data.new = true;
		}else{
			if(!data.show){
				// console.log(data.id);
				$http.post('admin/display_edit',{
					_token: $scope.csrf,
					id: data.id,
					size: data.size
				}).then((req)=>{
					data.color = req.data.color;
				})
			}
			data.show = !data.show;
		}
		
	}
	$scope.delete = (data)=>{
		var index = $scope.datas.indexOf(data);
		if(index >= 0 ){
			$scope.datas.splice(index,1);
			$scope.displays = new NgTableParams({}, { dataset: $scope.datas});
			$http.post('admin/display_delete',{
				_token : $scope.csrf,
				id: data.id
			}).then((req)=>{
				console.log(req);
			})
		}
	}
}])

app.controller('storageController',['$scope','$http','NgTableParams', function storageController($scope,$http,NgTableParams){
	this.$onInit = function() {
	$scope.datas= [];
	$http.get('admin/storage_information').then((req) => {
		$scope.datas = req.data;
		$scope.storages = new NgTableParams({}, { dataset: $scope.datas});
	});
	}
	$scope.new = ()=>{
		$scope.datas.unshift({size:'',id: 'NULL',new:false});
		$scope.storages = new NgTableParams({}, { dataset: $scope.datas});
	}
	$scope.change = (data)=>{
		if(data.new == false) {
			 $http.post('admin/storage',{
				_token: $scope.csrf,
				size: data.size
			},{header : {'Content-Type' : 'application/json; charset=UTF-8'}})
			.then( (req) => {
				console.log(req.data);
				if( req.data ){
					data.id = req.data.id;
				}
			})
			data.new = true;
		}else{
			if(!data.show){
				// console.log(data.id);
				$http.post('admin/storage_edit',{
					_token: $scope.csrf,
					id: data.id,
					size: data.size
				}).then((req)=>{
					data.color = req.data.color;
				})
			}
			data.show = !data.show;
		}
		
	}
	$scope.delete = (data)=>{
		var index = $scope.datas.indexOf(data);
		if(index >= 0 ){
			$scope.datas.splice(index,1);
			$scope.storages = new NgTableParams({}, { dataset: $scope.datas});
			$http.post('admin/storage_delete',{
				_token : $scope.csrf,
				id: data.id
			}).then((req)=>{
				console.log(req);
			})
		}
	}
}])

app.controller('operatingSystemController',['$scope','$http','NgTableParams', function operatingSystemController($scope,$http,NgTableParams){
	this.$onInit = function() {
	$scope.datas= [];
	$http.get('admin/opoperating_systems_information').then((req) => {
		$scope.datas = req.data;
		$scope.op = new NgTableParams({}, { dataset: $scope.datas});
	});
	}
	$scope.new = ()=>{
		$scope.datas.unshift({name:'',id: 'NULL',new:false});
		$scope.op = new NgTableParams({}, { dataset: $scope.datas});
	}
	$scope.change = (data)=>{
		if(data.new == false) {
			 $http.post('admin/opoperating_systems',{
				_token: $scope.csrf,
				name: data.name
			},{header : {'Content-Type' : 'application/json; charset=UTF-8'}})
			.then( (req) => {
				console.log(req.data);
				if( req.data ){
					data.id = req.data.id;
				}
			})
			data.new = true;
		}else{
			if(!data.show){
				// console.log(data.id);
				$http.post('admin/opoperating_systems_edit',{
					_token: $scope.csrf,
					id: data.id,
					name: data.name
				}).then((req)=>{
					data.color = req.data.color;
				})
			}
			data.show = !data.show;
		}
		
	}
	$scope.delete = (data)=>{
		var index = $scope.datas.indexOf(data);
		if(index >= 0 ){
			$scope.datas.splice(index,1);
			$scope.op = new NgTableParams({}, { dataset: $scope.datas});
			$http.post('admin/opoperating_systems_delete',{
				_token : $scope.csrf,
				id: data.id
			}).then((req)=>{
				console.log(req);
			})
		}
	}
}])

app.controller('brandController',['$scope','$http','NgTableParams', function brandController($scope,$http,NgTableParams){
	this.$onInit = function() {
	$scope.datas= [];
	$http.get('admin/brand_information').then((req) => {
		$scope.datas = req.data;
		$scope.brand = new NgTableParams({}, { dataset: $scope.datas});
	});
	}
	$scope.new = ()=>{
		$scope.datas.unshift({name:'',id: 'NULL',product: '0',new:false});
		$scope.brand = new NgTableParams({}, { dataset: $scope.datas});
	}
	$scope.change = (data)=>{
		if(data.new == false) {
			 $http.post('admin/brand',{
				_token: $scope.csrf,
				name: data.name
			},{header : {'Content-Type' : 'application/json; charset=UTF-8'}})
			.then( (req) => {
				console.log(req.data);
				if( req.data ){
					data.id = req.data.id;
				}
			})
			data.new = true;
		}else{
			if(!data.show){
				// console.log(data.id);
				$http.post('admin/brand_edit',{
					_token: $scope.csrf,
					id: data.id,
					name: data.name
				}).then((req)=>{
					data.color = req.data.color;
				})
			}
			data.show = !data.show;
		}
		
	}
	$scope.delete = (data)=>{
		var index = $scope.datas.indexOf(data);
		if(index >= 0 ){
			$scope.datas.splice(index,1);
			$scope.brand = new NgTableParams({}, { dataset: $scope.datas});
			$http.post('admin/brand_delete',{
				_token : $scope.csrf,
				id: data.id
			}).then((req)=>{
				console.log(req);
			})
		}
	}
}])

app.controller('productController',['$scope','$http','NgTableParams', function productController($scope,$http,NgTableParams){
	var formData = new FormData();
	this.$onInit = function() {
		$scope.datas= [];
		$http.get('admin/product_information').then((req) => {
			$scope.datas = req.data;
	    	$scope.product = new NgTableParams({}, { dataset: $scope.datas});
			console.log($scope.datas);
		});
		$http.get('admin/color_information').then((req) => {
			req.data.map( color => {
				color.label = color.color;
			})
			$scope.colors = req.data;
			// console.log($scope.colors);
		});

		$http.get('admin/display_information').then((req) => {
			$scope.displays = req.data;
		});

		$http.get('admin/brand_information').then((req) => {
			$scope.brands = req.data;
		});

		$http.get('admin/opoperating_systems_information').then((req) => {
			$scope.ops = req.data;
		});

		$http.get('admin/storage_information').then((req) => {
			$scope.storages = req.data;
		});
		$scope.name = '';
		$scope.price = 0;
		$scope.sale = 0;
		$scope.quantity = 0;

		$scope.color = []; 
		$scope.colorSetting = {};
	}

	
	$scope.new = ()=>{
		if(!($scope.name && $scope.color && $scope.brand && $scope.display && $scope.storage)){
			return;
		}
		var colorArray = [];
		$scope.color.map(color => {
			// formData.append('colors[]', color.id);
			colorArray.push(color.id);
		})
		// console.log(colorArray);
		formData.append('_token',$scope.csrf);
		formData.append('name',$scope.name);
		formData.append('colors',colorArray);
		formData.append('display_id',$scope.display.id);
		formData.append('storage_id',$scope.storage.id);
		formData.append('brand_id',$scope.brand.id);
		formData.append('op_id',$scope.op.id);
		formData.append('price',$scope.price);
		formData.append('sale',$scope.sale);
		formData.append('quantity',$scope.quantity);
		formData.append('description',$scope.description);
		var request = {
	        method: 'POST',
	        url: '/admin/product',
	        data: formData,
	        headers: {
	            'Content-Type': undefined
	        }
	    };
	    $http(request).then( function success(res){
	    	formData = new FormData();
	    	$scope.name = '';
	    	$scope.price = 0;
			$scope.sale = 0;
			$scope.quantity = 0;
	    	// $scope.color = [];
	    	// $scope.display = {};
	    	// $scope.storage = {};
	    	// $scope.brand = {};
	    	// $scope.op = {};
	    	document.getElementsByClassName('imagefile').value = '';
	    	$scope.description = '';
	    	res.data.color_id = colorArray;
	    	$scope.datas.unshift(res.data);
	    	$scope.product = new NgTableParams({}, { dataset: $scope.datas});
	    });
		// $scope.datas.unshift({name:'',id: 'NULL',product: '0',new:false});
		// $scope.brand = new NgTableParams({}, { dataset: $scope.datas});
	}

	$scope.change = (data)=>{
			if(!data.show){
				formData.append('_token',$scope.csrf);
				if(data.brand_sl){
					formData.append('brand_id',data.brand_sl.id);
				}
				if(data.display_sl){
					formData.append('display_id',data.display_sl.id);
				}
				if(data.storage_sl){
					formData.append('storage_id',data.storage_sl.id);
				}
				if(data.operating_system_sl){
					formData.append('op_id',data.operating_system_sl.id);
				}

				var colorArray = [];
				data.color_sl.map(color => {
					// formData.append('colors[]', color.id);
					colorArray.push(color.id);
				});
				formData.append('colors',colorArray);

				formData.append('price',data.price);
				formData.append('sale',data.sale);
				formData.append('quantity',data.quantity);
				formData.append('description',data.description);
				formData.append('name',data.name);
				formData.append('id',data.id);

				var request = {
			        method: 'POST',
			        url: '/admin/product_edit',
			        data: formData,
			        headers: {
			            'Content-Type': undefined
			        }
			    };
			    $http(request).then( function success(res){
			    	formData = new FormData();
	    			document.getElementsByClassName('imagefile').value = '';
			    	data.colors = res.data.colors;
			    	data.links = res.data.links;
			    	console.log(data);
			    	console.log(res.data);
			    });
				// console.log(data.id);
				// $http.post('admin/product_edit',{
				// 	_token: $scope.csrf,
				// 	id: data.id,
				// 	name: data.name
				// }).then((req)=>{
				// 	data.color = req.data.color;
				// })
			}
			data.show = !data.show;
	}
	$scope.delete = (data)=>{
		var index = $scope.datas.indexOf(data);
		console.log(index);
		if(index >= 0 ){
			$scope.datas.splice(index,1);
			$scope.product = new NgTableParams({}, { dataset: $scope.datas});
			$http.post('admin/product_delete',{
				_token : $scope.csrf,
				id: data.id
			}).then((req)=>{
				console.log(req);
			})
		}
	}
	$scope.setTheFiles = function ($files) {
        angular.forEach($files, function (value, key) {
            formData.append('imagefile[]', value);
        });
    };
}]);

app.directive('ngFiles', ['$parse', function ($parse) {
    function file_links(scope, element, attrs) {
        var onChange = $parse(attrs.ngFiles);
        element.on('change', function (event) {
            onChange(scope, {$files: event.target.files});
        });
    }
    return {
        link: file_links
    }
}]);
// app.controller('danhmucController', ['$scope','$http','$q','NgTableParams', function loaidanhmucController($scope,$http,$q,NgTableParams){
// 	$scope.loaidanhmuc = [];
// 	$scope.danhmucRes = [];
// 	$scope.danhmuc = new NgTableParams({}, { dataset: [{}]});

// 	// $http.get('admin/loaidanhmuc_i').then((req)=>{
// 	// 	$scope.loaidanhmuc=req.data;
// 	// })
// 	deferredL = $http.get('admin/loaidanhmuc_i');

// 	deferredD = $http.get('admin/danhmuc_i');
// 	$q.all({deferredL,deferredD}).then(req=>{
// 		$scope.loaidanhmuc=req.deferredL.data;

// 		for(let i = 0; i<req.deferredD.data.length; i ++){
// 			for(let j =0 ; j<$scope.loaidanhmuc.length;j++){
// 				if(req.deferredD.data[i].loaidanhmuc_id == $scope.loaidanhmuc[j].id){

// 					req.deferredD.data[i].lastloaidanhmuc = $scope.loaidanhmuc[j].id;
// 					req.deferredD.data[i].loaidanhmuc_id = $scope.loaidanhmuc[j];
// 					req.deferredD.data[i].showTen = $scope.loaidanhmuc[j].tenloaidanhmuc;
// 					break;
// 				}
// 			}
// 		}
// 		$scope.danhmucRes = req.deferredD.data;
// 		$scope.danhmuc = new NgTableParams({}, { dataset: $scope.danhmucRes});
// 		// console.log(req);
// 	})

// 	// $http.get('admin/danhmuc_i').then((req)=>{
// 		// 	// console.log(req.data);
// 		// 	for(let i = 0; i<req.data.length; i ++){
// 		// 		for(let j =0 ; j<$scope.loaidanhmuc.length;j++){
// 		// 			if(req.data[i].loaidanhmuc_id == $scope.loaidanhmuc[j].id){

// 		// 				req.data[i].lastloaidanhmuc = $scope.loaidanhmuc[j].id;
// 		// 				req.data[i].loaidanhmuc_id=$scope.loaidanhmuc[j];
// 		// 				break;
// 		// 			}
// 		// 		}
// 		// 	}
// 		// 	$scope.danhmuc = req.data;
// 		// 	console.log($scope.danhmuc);
// 	// });

// 	$scope.reset = ()=>{
// 		$scope.tenDanhMuc = '';
// 	}

// 	$scope.taomoi = ()=>{
// 		if(typeof($scope.tenDanhMuc)!="undefined"&& typeof($scope.select)!="undefined"){
// 			$http.post('admin/danhmuc',{
// 				_token: $scope.csrf,
// 				tendanhmuc: $scope.tenDanhMuc,
// 				loaidanhmuc_id: $scope.select.id
// 			},{header : {'Content-Type' : 'application/json; charset=UTF-8'}}).then((req)=>{
// 				req.data.sosanpham=0;
// 				req.data.lastloaidanhmuc = req.data.loaidanhmuc_id;
// 				req.data.loaidanhmuc_id=$scope.select;
// 				req.data.showTen = $scope.select.tenloaidanhmuc;
// 				$scope.danhmucRes.unshift(req.data);
// 				$scope.danhmuc = new NgTableParams({}, { dataset: $scope.danhmucRes});
// 			});

// 			$scope.tenDanhMuc='';
// 		}
// 	}

// 	$scope.change = (data)=>{

// 		if(!data.show){
// 				$http.post('admin/danhmuc_e',{
// 				_token:  $scope.csrf,
// 				id: data.id,
// 				tendanhmuc: data.tendanhmuc,
// 				loaidanhmucmoi: data.loaidanhmuc_id.id,
// 				loaidanhmuccu: data.lastloaidanhmuc
// 			},{header : {'Content-Type' : 'application/json; charset=UTF-8'}})
// 			.then(req=>{
// 				data.lastloaidanhmuc = data.loaidanhmuc_id.id;
// 				data.showTen = data.loaidanhmuc_id.tenloaidanhmuc;
// 			});
// 		}
// 		data.show = !data.show;
// 	}

// 	$scope.delete = (data)=>{
// 		var index =  $scope.danhmucRes.indexOf(data);
// 		// console.log(index);
// 		if(index >= 0 ){
// 			$scope.danhmucRes.splice(index,1);	
// 			$scope.danhmuc = new NgTableParams({}, { dataset: $scope.danhmucRes});
// 			$http.get('/admin/danhmuc_d/'+data.id).then(req=>{
// 				console.log(req.data);
// 			})
// 		}
// 	}
// }])

// // =============================
// app.controller('sanphamController', ['$scope','$http','$q','NgTableParams', function sanphamController($scope,$http,$q,NgTableParams){
// 	$scope.danhmuc = [];
// 	$scope.sanphamRes = [];
// 	$scope.sanpham = new NgTableParams({}, { dataset: [{}]});
// 	var formData = new FormData();
// 	var promiseDanhMuc = $http.get('/admin/danhmuc_i')
	
// 	var promiseSanPham = $http.get('/admin/sanpham_i')
	
// 	$q.all({promiseDanhMuc,promiseSanPham}).then(res => {
// 		$scope.danhmuc = res.promiseDanhMuc.data;
// 		for(let i = 0; i < res.promiseSanPham.data.length; i++ ){
// 			for(let j = 0; j < $scope.danhmuc.length; j++){
// 				if(res.promiseSanPham.data[i].danhmuc_id == $scope.danhmuc[j].id) {
// 					res.promiseSanPham.data[i].danhmuc = $scope.danhmuc[j];
// 					res.promiseSanPham.data[i].danhmuccu = $scope.danhmuc[j].id;
// 					res.promiseSanPham.data[i].showTen = $scope.danhmuc[j].tendanhmuc;
// 					break;
// 				}
// 			}
// 		}
// 		$scope.sanphamRes = res.promiseSanPham.data;
// 		$scope.sanpham = new NgTableParams({}, { dataset: $scope.sanphamRes});
// 		// console.log($scope.sanpham);
// 	})
// 	$scope.change = function(data) {
// 		if(!data.show){
// 			formData.append('_token',$scope.csrf);
// 			formData.append('id',data.id);
// 			formData.append('tensanpham',data.tensanpham);
// 			formData.append('danhmuccu',data.danhmuccu);
// 			formData.append('danhmuc_id',data.danhmuc.id);
// 			formData.append('sosanpham',data.sosanpham);
// 			formData.append('mausac',data.mausac);
// 			formData.append('gia',data.gia);
// 			formData.append('giamgia',data.giamgia);	
// 			var request = {
// 		        method: 'POST',
// 		        url: '/admin/sanpham_e',
// 		        data: formData,
// 		        headers: {
// 		            'Content-Type': undefined
// 		        }
// 	   		};
// 	   		$http(request)
// 	   		.then(res => {
// 	   			formData = new FormData();
// 	   			data.anh_phu_list = res.data;
// 	   			data.danhmuccu = data.danhmuc_id;
// 	   			data.showTen = data.danhmuc.tendanhmuc;

// 	   			console.log(res.data);
// 	   		});
// 		}
// 		data.show = !data.show;
// 	}

// 	$scope.delete = function(data) {
// 		var index =  $scope.sanphamRes.indexOf(data);
// 		$scope.sanpham = new NgTableParams({}, { dataset: $scope.sanphamRes});
// 		// console.log(index);
// 		if(index >= 0 ){
// 			$scope.sanphamRes.splice(index,1);	
// 			$http.get('/admin/sanpham_d/'+data.id).then(req=>{
// 				console.log(req.data);
// 			})
// 		}
// 	}

// 	$scope.uploadFile = function () {
// 		formData.append('tensanpham',$scope.tensanpham);
// 		formData.append('danhmuc',$scope.select.id);
// 		formData.append('sotien',$scope.sotien);
// 		formData.append('mausac',$scope.mausac);
// 		formData.append('kichthuoc',$scope.kichthuoc);
// 		formData.append('soluong',$scope.soluong);
// 		formData.append('giamgia',$scope.giamgia);
// 		formData.append('mota',$scope.mota);
// 		formData.append('_token',$scope.csrf);
// 	    var request = {
// 	        method: 'POST',
// 	        url: '/admin/sanpham',
// 	        data: formData,
// 	        headers: {
// 	            'Content-Type': undefined
// 	        }
// 	    };
// 	    $http(request)
// 	        .then(function success(res) {
// 	        	console.log(res);
// 	        	data  = res.data;
// 	        	for(let i = 0 ; i < $scope.danhmuc.length; i++ )
// 	        	{
// 	        		if(data.danhmuc_id == $scope.danhmuc[i].id){	
// 	        			data.danhmuc = $scope.danhmuc[i];
// 	        			data.danhmuccu = $scope.danhmuc[i].id;
// 	        			data.showTen = $scope.danhmuc[i].tendanhmuc;
// 	        		}
// 	        	}
// 	        	$scope.sanphamRes.unshift(data);
// 				$scope.sanpham = new NgTableParams({}, { dataset: $scope.sanphamRes});

// 	        	$scope.tensanpham = '';
// 				$scope.select.id = '';
// 				$scope.sotien = '';
// 				$scope.mausac = '';
// 				$scope.kichthuoc = '';
// 				$scope.soluong = '';
// 				$scope.giamgia = '';
// 				$scope.mota = '';
// 	            // var fileElement = angular.element('#imagefile');
// 	            // fileElement.value = '';
// 	            document.getElementById('imagefile').value = '';
// 	            formData = new FormData();

// 	        }, function error(e) {
// 	            console.log(e);
// 	        });
// 	    };

// 	$scope.setTheFiles = function ($files) {
//         angular.forEach($files, function (value, key) {
//             formData.append('imagefile[]', value);
//         });
//     };
// }]);

// app.controller('slideController', ['$scope','$http','NgTableParams', function slideController($scope, $http, NgTableParams){
// 	var formData = new FormData();
// 	$scope.slide = new NgTableParams({}, { dataset: [{}]});
// 	$scope.slideRes = [];
// 	$http.get('/admin/slide_i')
// 	.then(res => {
// 		console.log(res.data);
// 		$scope.slideRes = res.data;
// 		$scope.slide = new NgTableParams({}, { dataset: $scope.slideRes});
// 	});
// 	$scope.uploadFile = function() {
// 		formData.append('_token',$scope.csrf);
// 		formData.append('tieude',$scope.tieude);
// 		formData.append('noidung',$scope.noidung);
// 		formData.append('button',$scope.button);
// 		formData.append('link',$scope.link);

// 		var request = {
// 	        method: 'POST',
// 	        url: '/admin/slide',
// 	        data: formData,
// 	        headers: {
// 	            'Content-Type': undefined
// 	        }
// 	    };

// 	    $http(request).then(function success(res) {
// 	        	data  = res.data;
// 				$scope.link = '';
// 				$scope.button = '';
// 				$scope.noidung = '';
// 				$scope.tieude = '';
// 	            // var fileElement = angular.element('#imagefile');
// 	            // fileElement.value = '';
// 	            document.getElementById('imagefile').value = '';
// 	            formData = new FormData();
// 	            $scope.slideRes.unshift(data);
// 				$scope.slide = new NgTableParams({}, { dataset: $scope.slideRes});
// 		});
// 	}

// 	$scope.change = (data) => {
// 		if(!data.show) {
// 			formData.append('_token',$scope.csrf);
// 			formData.append('id',data.id);
// 			formData.append('tieude',data.tieude);
// 			formData.append('noidung',data.noidung);
// 			formData.append('button',data.button);
// 			formData.append('link',data.link);
// 			var request = {
// 		        method: 'POST',
// 		        url: '/admin/slide_e',
// 		        data: formData,
// 		        headers: {
// 		            'Content-Type': undefined
// 		        }
// 	   		};
// 	   		$http(request)
// 	   		.then(res => {
// 	   			data.bieutuong = res.data;
// 	   			formData = new FormData();
// 	   		});
// 		}
// 		data.show = !data.show;
// 	}

// 	$scope.delete = (data) => {
// 		var index =  $scope.slideRes.indexOf(data);
// 		$scope.slide = new NgTableParams({}, { dataset: $scope.slideRes});
// 		// console.log(index);
// 		if(index >= 0 ){
// 			$scope.slideRes.splice(index,1);	
// 			$http.get('/admin/slide_d/'+data.id).then(req=>{
// 				console.log(req.data);
// 			})
// 		}
// 	}

// 	$scope.setTheFiles = function ($files) {
//         angular.forEach($files, function (value, key) {
//             formData.append('imagefile', value);
//         });
//     };

// }]);


// app.directive('ngFiles', ['$parse', function ($parse) {
//     function file_links(scope, element, attrs) {
//         var onChange = $parse(attrs.ngFiles);
//         element.on('change', function (event) {
//             onChange(scope, {$files: event.target.files});
//         });
//     }
//     return {
//         link: file_links
//     }
// }]);