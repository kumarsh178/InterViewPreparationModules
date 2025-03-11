define(['ko'],function (ko) {
    'use strict';
    var moduleAll = {
        title: ko.observable("Module Namessssss will return"),
        functionA: function() {
            console.log('This is from module A, functionA');
        },

        functionB: function() {
            console.log('This is from module A, function B');
        },
        functionC: function() {
            return 'This is from module A, function B';
        }
    };

    return moduleAll;
});