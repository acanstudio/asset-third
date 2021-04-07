// 对Date的扩展，将 Date 转化为指定格式的String
// 月(M)、日(d)、小时(h)、分(m)、秒(s)、季度(q) 可以用 1-2 个占位符，
// 年(y)可以用 1-4 个占位符，毫秒(S)只能用 1 个占位符(是 1-3 位的数字)
// 例子：
// (new Date()).Format("yyyy-MM-dd hh:mm:ss.S") ==> 2006-07-02 08:09:04.423
// (new Date()).Format("yyyy-M-d h:m:s.S")      ==> 2006-7-2 8:9:4.18
Date.prototype.Format = function (fmt) { //author: meizz
  var o = {
    "M+": this.getMonth() + 1, //月份
    "d+": this.getDate(), //日
    "h+": this.getHours(), //小时
    "m+": this.getMinutes(), //分
    "s+": this.getSeconds(), //秒
    "q+": Math.floor((this.getMonth() + 3) / 3), //季度
    "S": this.getMilliseconds() //毫秒
  };
  if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
  for (var k in o)
    if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
  return fmt;
};

var utils = {};

utils.GetQueryString = function(url) {

   var reg = new RegExp("(^|&)" + url + "=([^&]*)(&|$)","i");
   var r = window.location.search.substr(1).match(reg);
   if (r!=null) return (r[2]); return null;

};
utils.banner = function(){
$(".top_banner .close").on("click",function(){
  $(".top_banner").hide()
})
}

utils.AnimalType = {
//  cat: {
//    id: 1,
//    artcleName: '猫咪文章',
//    subArticle: [
//      {
//        id: 5,
//        pId:1,
//        PName:'饲养',
//        code: 'catfd',
//        name: '猫咪饲养',
//
//        subType: [
//          {
//            id: 12,
//            code: 'catspe',
//            name: '猫咪品种'
//          },
//          {
//            id: 13,
//            code: 'kitra',
//            name: '幼猫饲养'
//          },
//          {
//            id: 14,
//            code: 'acatra',
//            name: '成猫饲养'
//          },
//          {
//            id: 15,
//            code: 'catbty',
//            name: '猫咪美容'
//          }
//        ]
//      },
//      {
//        id: 25,
//        pId:2,
//        PName:'训练',
//        code: 'cattn',
//        name: '猫咪训练',
//
//        subType: [
//          {
//            id: 29,
//            code: 'catin',
//            name: '猫咪技巧训练'
//          },
//          {
//            id: 0,
//            code: 'catct',
//            name: '猫咪纠正训练'
//          }
//        ]
//      },
//      {
//        id: 33,
//        pId:3,
//        PName:'医疗',
//        code: 'catmd',
//        name: '猫咪医疗',
//
//        subType: [
//          {
//            id: 41,
//            code: 'catin',
//            name: '猫咪常见病'
//          },
//          {
//            id: 42,
//            code: 'catcd',
//            name: '猫咪传染病'
//          },
//          {
//            id: 43,
//            code: 'catder',
//            name: '猫咪皮肤病'
//          },
//          {
//            id: 44,
//            code: 'catpil',
//            name: '猫咪用药常识'
//          },
//          {
//            id: 45,
//            code: 'catbred',
//            name: '猫咪繁殖'
//          }
//        ]
//      }
//    ]
//  },
//  dog: {
//    id: 2,
//    code: 'dog',
//    artcleName: '狗狗文章',
//    subArticle: [
//      {
//        id: 4,
//        pId:1,
//        PName:'饲养',
//        code: 'dogfd',
//        name: '狗狗饲养',
//
//        subType: [
//          {
//            id: 8,
//            code: 'dogspe',
//            name: '狗狗品种'
//          },
//          {
//            id: 9,
//            code: 'pupra',
//            name: '幼犬饲养'
//          },
//          {
//            id: 10,
//            code: 'adogra',
//            name: '成犬饲养'
//          },
//          {
//            id: 11,
//            code: 'dogbuty',
//            name: '狗狗美容'
//          }
//        ]
//      },
//      {
//        id: 24,
//        pId:2,
//        PName:'训练',
//        code: 'dogtn',
//        name: '狗狗训练',
//
//        subType: [
//          {
//            id: 28,
//            code: 'dogsktr',
//            name: '狗狗技巧训练'
//          },
//          {
//            id: 27,
//            code: 'doglftr',
//            name: '狗狗行为训练'
//          }
//        ]
//      },
//      {
//        id: 32,
//        pId:3,
//        PName:'医疗',
//        code: 'dogmd',
//        name: '狗狗医疗',
//
//        subType: [
//          {
//            id: 36,
//            code: 'dogdis',
//            name: '狗狗常见病'
//          },
//          {
//            id: 37,
//            code: 'dogcd',
//            name: '狗狗传染病'
//          },
//          {
//            id: 38,
//            code: 'dogder',
//            name: '狗狗皮肤病'
//          },
//          {
//            id: 39,
//            code: 'dogpil',
//            name: '狗狗用药常识'
//          },
//          {
//            id: 40,
//            code: 'dogbred',
//            name: '狗繁殖'
//          }
//        ]
//      }
//    ]
//  },
//  small: {
//    id: 3,
//    artcleName: '小宠文章',
//    subArticle: [
//      {
//        id: 6,
//        pId:1,
//        PName:'饲养',
//        code: 'spetfd',
//        name: '小宠饲养',
//
//        subType: [
//          {
//            id: 16,
//            code: 'spetspe',
//            name: '小宠品种'
//          },
//          {
//            id: 17,
//            code: 'spettra',
//            name: '小宠喂食'
//          },
//          {
//            id: 18,
//            code: 'speten',
//            name: '小宠环境'
//          },
//          {
//            id: 52,
//            code: 'spetfc',
//            name: '小宠养护'
//          }
//        ]
//      },
//      {
//        id: 26,
//        pId:2,
//        PName:'训练',
//        code: 'spettn',
//        name: '小宠训练',
//
//        subType: [
//          {
//            id: 31,
//            code: 'rabtr',
//            name: '兔子训练'
//          }
//        ]
//      },
//      {
//        id: 34,
//        pId:3,
//        PName:'医疗',
//        code: 'spetmd',
//        name: '小宠医疗',
//
//        subType: [
//          {
//            id: 46,
//            code: 'spdis',
//            name: '小宠常见病症'
//          },
//          {
//            id: 47,
//            code: 'sppil',
//            name: '小宠用药常识'
//          },
//          {
//            id: 48,
//            code: '48',
//            name: '小宠繁殖'
//          }
//        ]
//      }
//    ]
//  },
//  fish: {
//    id: 4,
//    artcleName: '水族文章',
//    subArticle: [
//      {
//        id: 7,
//        pId:1,
//        PName:'饲养',
//        code: 'aqfd',
//        name: '水族饲养',
//
//        subType: [
//          {
//            id: 19,
//            code: 'aqspe',
//            name: '水族品种'
//          },
//          {
//            id: 20,
//            code: 'aqra',
//            name: '水族喂食'
//          },
//          {
//            id: 21,
//            code: 'sqen',
//            name: '水族环境'
//          },
//          {
//            id: 22,
//            code: 'aqls',
//            name: '水族造景'
//          },
//          {
//            id: 23,
//            code: 'aqeq',
//            name: '水族器材'
//          }
//        ]
//      },
//      {
//        id: 35,
//        pId:3,
//        PName:'医疗',
//        code: 'aqmd',
//        name: '水族医疗',
//
//        subType: [
//          {
//            id: 49,
//            code: 'aqdis',
//            name: '水族常见病症'
//          },
//          {
//            id: 50,
//            code: 'adpil',
//            name: '水族用药常识'
//          },
//          {
//            id: 51,
//            code: 'aqbred',
//            name: '水族繁殖'
//          }
//        ]
//      }
//    ]
//  },
//  reptile: {
//    id: 5,
//    artcleName: '爬虫文章',
//    subArticle: [
//      {
//        id: 54,
//        pId:1,
//        PName:'饲养',
//        code: 'rptfd',
//        name: '爬虫饲养',
//
//        subType: [
//          {
//            id: 55,
//            code: 'rptspe',
//            name: '爬虫品种'
//          },
//          {
//            id: 56,
//            code: 'rptfc',
//            name: '爬虫养护'
//          },
//          {
//            id: 57,
//            code: 'rptra',
//            name: '爬虫喂食'
//          },
//          {
//            id: 58,
//            code: 'aqls',
//            name: '爬虫环境'
//          }
//        ]
//      },
//      {
//        id: 59,
//        pId:3,
//        PName:'医疗',
//        code: 'rptmd',
//        name: '爬虫医疗',
//
//        subType: [
//          {
//            id: 60,
//            code: 'rptdis',
//            name: '爬虫常见病症'
//          },
//          {
//            id: 61,
//            code: 'rptpil',
//            name: '爬虫用药常识'
//          },
//          {
//            id: 62,
//            code: 'rptbred',
//            name: '爬虫繁殖'
//          }
//        ]
//      }
//    ]
//  },
//  plant: {
//    id: 6,
//    artcleName: '植物文章',
//    subArticle: [
//      {
//        id: 63,
//        pId:53,
//        PName:'医疗',
//        code: 'cultivated',
//        name: '植物栽培',
//
//        subType: [
//          {
//            id: 66,
//            code: 'succult',
//            name: '多肉植物栽培'
//          },
//          {
//            id: 67,
//            code: 'flocult',
//            name: '观花植物栽培'
//          },
//          {
//            id: 57,
//            code: 'rptra',
//            name: '爬虫喂食'
//          },
//          {
//            id: 68,
//            code: 'leacult',
//            name: '观叶植物栽培'
//          },
//          {
//            id: 69,
//            code: 'popcult',
//            name: '流行新宠栽培'
//          }
//        ]
//      },
//      {
//        id: 64,
//        pId:53,
//        PName:'医疗',
//        code: 'disease',
//        name: '植物疾病',
//
//        subType: [
//          {
//            id: 70,
//            code: 'sucdis',
//            name: '多肉植物疾病'
//          },
//          {
//            id: 71,
//            code: 'flodis',
//            name: '观花植物疾病'
//          },
//          {
//            id: 72,
//            code: 'leadis',
//            name: '观叶植物疾病'
//          },
//          {
//            id: 73,
//            code: 'popdis',
//            name: '流行新宠疾病'
//          }
//        ]
//      },
//      {
//        id: 65,
//        pId:53,
//        PName:'医疗',
//        code: 'propagators',
//        name: '植物繁殖',
//
//        subType: [
//          {
//            id: 74,
//            code: 'sucprop',
//            name: '多肉植物繁殖'
//          },
//          {
//            id: 75,
//            code: 'floprop',
//            name: '观花植物繁殖'
//          },
//          {
//            id: 76,
//            code: 'leaprop',
//            name: '观叶植物繁殖'
//          },
//          {
//            id: 77,
//            code: 'popprop',
//            name: '流行新宠繁殖'
//          }
//        ]
//      }
//    ]
//  }
};

window.utils = utils;
