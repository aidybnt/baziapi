````
var jsonData = JSON.parse(responseBody);
if (jsonData.data.access_token){
    tests["body has access_token"] = true;
    postman.setEnvironmentVariable("access_token",jsonData.data.access_token);
}
else {
    tests["body has access_token"] = false;
}
````
