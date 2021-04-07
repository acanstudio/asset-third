function BoqiiAuth() {
  this.token = "214e1ba0-ce80-42d5-bda8-8e97c8dd7a2c";
}

BoqiiAuth.prototype.signParams = function (params) {
  var token = this.token;

  if ('Sign' in params) {
    delete params.Sign;
  }
  var newParamsWithOrder = this.sortByAscendingKeys(params);
  var stringToSign = this.joinValues(newParamsWithOrder) + token;
  return hex_md5(unescape(encodeURIComponent(stringToSign)));
};

BoqiiAuth.prototype.sortByAscendingKeys = function (obj) {
  var newObj = {};
  var keys = Object.keys(obj);
  keys = keys.sort(function (a, b) {
    if (a > b) return 1;
    if (a == b) return 0;
    return -1;
  });
  for (var i in keys) {
    newObj[keys[i]] = obj[keys[i]];
  }
  return newObj;
};

BoqiiAuth.prototype.joinValues = function (obj) {
  var keys = Object.keys(obj);
  var values = [];
  for (var i in keys) {
    values.push(obj[keys[i]]);
  }
  return values.join('');
};

window.BoqiiAuth = BoqiiAuth;