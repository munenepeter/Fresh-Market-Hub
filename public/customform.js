/**
 * Minified by jsDelivr using Terser v3.14.1.
 * Original file: /npm/@tailwindcss/custom-forms@0.2.1/src/index.js
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
 const tap=require("lodash/tap"),map=require("lodash/map"),toPairs=require("lodash/toPairs"),fromPairs=require("lodash/fromPairs"),mergeWith=require("lodash/mergeWith"),flatMap=require("lodash/flatMap"),isEmpty=require("lodash/isEmpty"),isArray=require("lodash/isArray"),isFunction=require("lodash/isFunction"),isUndefined=require("lodash/isUndefined"),isPlainObject=require("lodash/isPlainObject"),defaultOptions=require("./defaultOptions"),svgToDataUri=require("mini-svg-data-uri"),traverse=require("traverse");function merge(...e){return mergeWith({},...e,function e(i,o,t,r,n,a){return isPlainObject(o)?mergeWith(i,o,e):Object.keys(n).includes(t)?void 0===o?null:o:i})}function flattenOptions(e){return merge(...flatMap(toPairs(e),([e,i])=>fromPairs(e.split(", ").map(e=>[e,i]))))}function resolveOptions(e){return merge({default:defaultOptions},fromPairs(map(e,(e,i)=>[i,flattenOptions(e)])))}function replaceIconDeclarations(e,i){return traverse(e).map(function(e){if(isPlainObject(e)&&(Object.keys(e).includes("iconColor")||Object.keys(e).includes("icon"))){const{iconColor:o,icon:t,...r}=e;this.update(merge(i({icon:t,iconColor:o}),r))}})}module.exports=function({addUtilities:e,addComponents:i,theme:o,postcss:t}){function r(e,o=""){isEmpty(e)||i({[`.form-input${o}`]:e})}function n(e,o=""){isEmpty(e)||i({[`.form-textarea${o}`]:e})}function a(e,o=""){isEmpty(e)||i({[`.form-multiselect${o}`]:e})}function s(e,o=""){isEmpty(e)||i(replaceIconDeclarations({[`.form-select${o}`]:merge({"&::-ms-expand":{color:e.iconColor},...isUndefined(e.paddingLeft)?{}:{"@media print and (-ms-high-contrast: active), print and (-ms-high-contrast: none)":{paddingRight:e.paddingLeft}}},e)},({icon:i=e.icon,iconColor:o=e.iconColor})=>({backgroundImage:`url("${svgToDataUri(isFunction(i)?i(o):i)}")`})))}function c(e,o=""){isEmpty(e)||i(replaceIconDeclarations({[`.form-checkbox${o}`]:merge({...isUndefined(e.borderWidth)?{}:{"&::-ms-check":{"@media not print":{borderWidth:e.borderWidth}}}},e)},({icon:i=e.icon,iconColor:o=e.iconColor})=>({"&:checked":{backgroundImage:`url("${svgToDataUri(isFunction(i)?i(o):i)}")`}})))}function d(e,o=""){isEmpty(e)||i(replaceIconDeclarations({[`.form-radio${o}`]:merge({...isUndefined(e.borderWidth)?{}:{"&::-ms-check":{"@media not print":{borderWidth:e.borderWidth}}}},e)},({icon:i=e.icon,iconColor:o=e.iconColor})=>({"&:checked":{backgroundImage:`url("${svgToDataUri(isFunction(i)?i(o):i)}")`}})))}!function(){const e=resolveOptions(o("customForms"));r(e.default.input),n(e.default.textarea),a(e.default.multiselect),s(e.default.select),c(e.default.checkbox),d(e.default.radio),Object.keys((({default:e,...i})=>i)(e)).forEach(i=>{const o=`-${i}`;r(e[i].input||{},o),n(e[i].textarea||{},o),a(e[i].multiselect||{},o),s(e[i].select||{},o),c(e[i].checkbox||{},o),d(e[i].radio||{},o)})}()};
 //# sourceMappingURL=/sm/9b1748ef3fe742d4ab232aef0e790de717c2798f062fbc6173034fccfcb13fa8.map