(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-6e0a0ee4"],{"0630":function(e,a,t){"use strict";t.r(a);var r=function(){var e=this,a=e.$createElement,t=e._self._c||a;return t("div",[t("basic-header",{attrs:{items:["用户管理","用户管理"]}}),t("el-card",{staticStyle:{"margin-top":"30px"}},[t("el-tabs",{model:{value:e.activeName,callback:function(a){e.activeName=a},expression:"activeName"}},[t("el-tab-pane",{attrs:{label:"用户查看",name:"first"}},[t("el-form",{attrs:{inline:"","label-width":"100px"}},[t("el-form-item",{attrs:{label:"用户名称"}},[t("el-input",{model:{value:e.searchFormName,callback:function(a){e.searchFormName=a},expression:"searchFormName"}})],1),t("el-form-item",[t("el-button",{attrs:{type:"primary",circle:"",icon:"el-icon-search circle"},on:{click:e.search}})],1)],1),t("el-table",{attrs:{data:e.tableData}},[t("el-table-column",{attrs:{label:"Id",prop:"id"}}),t("el-table-column",{attrs:{label:"名称",prop:"nickName"}}),t("el-table-column",{attrs:{label:"头像",prop:"avatarUrl"}}),t("el-table-column",{attrs:{label:"性别",prop:"gender"},scopedSlots:e._u([{key:"default",fn:function(a){return[1===a.row.gender?t("span",[e._v("男")]):t("span",[e._v("女")])]}}])}),t("el-table-column",{attrs:{label:"地区",prop:"area"}}),t("el-table-column",{attrs:{label:"open_id",prop:"open_id"}}),t("el-table-column",{attrs:{label:"创建时间",prop:"create_time"}}),t("el-table-column",{attrs:{label:"操作"}})],1),t("el-pagination",{staticStyle:{"margin-top":"20px"},attrs:{background:"",layout:"prev, pager, next",total:e.total,"page-size":e.pageSize,"current-page":e.page},on:{"update:pageSize":function(a){e.pageSize=a},"update:page-size":function(a){e.pageSize=a},"update:currentPage":function(a){e.page=a},"update:current-page":function(a){e.page=a}}})],1),t("el-tab-pane",{attrs:{label:"用户添加",name:"second"}})],1)],1)],1)},n=[],l=t("dd20"),c={data:function(){return{activeName:"first",tableData:[],page:1,pageSize:5,total:0,searchFormName:"",api:"/api/user/user"}},methods:{fetchData:function(){var e=this,a={page:this.page,pageSize:this.pageSize};this.searchFormName&&(a["nickName"]=this.searchFormName),this.axios.get(this.api,{params:a}).then((function(a){200===a.data.code&&(e.tableData=a.data.data,e.total=a.data.total)}))},search:function(){this.fetchData(),this.$message.success("查询成功")}},created:function(){},watch:{page:function(){this.fetchData()}},components:{"basic-header":l["a"]},mounted:function(){this.fetchData()}},i=c,o=t("2877"),s=Object(o["a"])(i,r,n,!1,null,"14d11798",null);a["default"]=s.exports},dd20:function(e,a,t){"use strict";var r=function(){var e=this,a=e.$createElement,t=e._self._c||a;return t("el-breadcrumb",{attrs:{separator:"/"}},e._l(e.items,(function(a){return t("el-breadcrumb-item",[e._v(e._s(a))])})),1)},n=[],l={data:function(){return{}},methods:{},props:{items:{type:Array,required:!0}},created:function(){},mounted:function(){}},c=l,i=t("2877"),o=Object(i["a"])(c,r,n,!1,null,"e3ff9536",null);a["a"]=o.exports}}]);
//# sourceMappingURL=chunk-6e0a0ee4.07e87b7c.js.map