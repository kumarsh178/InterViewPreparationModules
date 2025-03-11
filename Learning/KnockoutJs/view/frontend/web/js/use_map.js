define(['ko'],function (ko) {
    'use strict';
    return function (config) {
        return {
            title: ko.observable("Module Namessssss will return"),
            allproducts: config.allproducts,
            getModulename : function () {
                console.log(config);
                return "helooooooooooooo friends";
            },
            getStudentsList: function(){
                return [{name:"shailendra"},{name:"Ravi"},{name:"Dhananjay"},{name:"Vishal Sharma"}];
            }
        }
    }
});