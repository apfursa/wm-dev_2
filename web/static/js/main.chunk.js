(this.webpackJsonpdefault_view=this.webpackJsonpdefault_view||[]).push([[0],{36:function(e,t,n){"use strict";n.r(t);var a,c,i,r=n(13),s=n.n(r),o=(n(0),n(23)),u=n(22),d=n(24),b=n(9),j=n(3),l=j.b.div(a||(a=Object(b.a)(["\n  display: flex;\n  justify-content: center;\n  align-items: center;\n  height: 100%;\n  background: #eef2f4;\n"]))),m=j.b.img(c||(c=Object(b.a)(["\n  width: 256px;\n"]))),O=n.p+"static/media/logo.png",p=n(4),f=function(){return Object(p.jsx)(l,{children:Object(p.jsx)(m,{src:O})})},h=j.b.div(i||(i=Object(b.a)(["\n  height: 100vh;\n  display: flex;\n  flex-direction: column;\n"]))),g=n(17),x=n(6),w=Object(x.d)({baseUrl:"https://".concat(window.location.hostname),prepareHeaders:function(e){return e.set("content-type","application/json"),e.set("authorization","Bearer ".concat(window._ACCESS_TOKEN_)),e}}),y=Object(g.a)({reducerPath:"menu",tagTypes:["Tabs"],baseQuery:w,endpoints:function(e){return{getTabs:e.query({query:function(e){return{url:"admin/ui/menu/menu-item/items?menuId=".concat(e)}}}),setTabs:e.mutation({query:function(e){return{url:"admin/ui/menu/menu-item-personal-settings/save-items",method:"POST",body:e}}})}}}),v=y.useGetTabsQuery,T=y.useSetTabsMutation,_=function(){var e=v("1"),t=e.data,n=e.isSuccess,a=e.isLoading,c=T(),i=Object(o.a)(c,1)[0];return n&&!a?Object(p.jsxs)(h,{children:[Object(p.jsx)(u.a,{tabs:t,setTab:function(e){console.log(e)},tabsMutation:function(e){i(e.map((function(e){return{id:e.id,visible:e.visible,order:e.order}})))}}),Object(p.jsx)(f,{})]}):Object(p.jsx)(d.a,{})};var S,P=function(){var e;try{return e=window._PARAMS_.placementOptions.path,console.log(e),Object(p.jsx)(_,{})}catch(t){}return Object(p.jsx)(_,{})},k=Object(j.a)(S||(S=Object(b.a)(["\n  * {\n    margin: 0;\n    padding: 0;\n  }\n"]))),q=n(5),A=n(14),E=n(7),M=n(1),B=Object(E.b)(Object(A.a)({},y.reducerPath,y.reducer)),C=Object(M.a)({reducer:B,middleware:function(e){return e().concat(y.middleware)}}),I=Object(p.jsxs)(q.a,{store:C,children:[Object(p.jsx)(k,{}),Object(p.jsx)(P,{})]});s.a.render(I,document.getElementById("root"))}},[[36,1,2]]]);
//# sourceMappingURL=main.chunk.js.map