"use strict";(globalThis.webpackChunk_wcAdmin_webpackJsonp=globalThis.webpackChunk_wcAdmin_webpackJsonp||[]).push([[8544],{72881:(r,e,s)=>{s.r(e),s.d(e,{default:()=>b});var t=s(69307),n=s(94333),o=s(9818),i=s(69596),c=s.n(i),a=s(92819),p=s(10431),u=s(67221),h=s(86020),l=s(17844),g=s(46040),d=s(19805),E=s(81514);const y=({params:r,path:e})=>r.report||e.replace(/^\/+/,"");class m extends t.Component{constructor(){super(...arguments),this.state={hasError:!1}}componentDidCatch(r){this.setState({hasError:!0}),console.warn(r)}render(){if(this.state.hasError)return null;const{isError:r}=this.props;if(r)return(0,E.jsx)(h.AnalyticsError,{});const e=y(this.props),s=(0,a.find)((0,d.Z)(),{report:e});if(!s)return(0,E.jsx)(g.E,{});const t=s.component;return(0,E.jsx)(l.CurrencyContext.Provider,{value:(0,l.getFilteredCurrencyInstance)((0,p.getQuery)()),children:(0,E.jsx)(t,{...this.props})})}}m.propTypes={params:c().object.isRequired};const b=(0,n.compose)((0,o.withSelect)(((r,e)=>{const s=(0,p.getQuery)(),{search:t}=s,n=r(u.ITEMS_STORE_NAME);if(!t)return{};const o=y(e),i=(0,p.getSearchWords)(s),c="categories"===o&&"single_category"===s.filter?"products":o,a=(0,u.searchItemsByString)(n,c,i,{per_page:100}),{isError:h,isRequesting:l,items:g}=a,d=Object.keys(g);return d.length?{isError:h,isRequesting:l,query:{...e.query,[c]:d.join(",")}}:{isError:h,isRequesting:l}})))(m)}}]);