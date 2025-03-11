define(['jquery', 'uiComponent', 'ko'], function ($, Component, ko) {
    'use strict';
    return Component.extend({
        defaults: {
            template: 'Interview_Practice/passdata_to_kj'
        },
        initialize: function (config) {
           this.price = config.price;
           this.message = config.message;
           this.allorderlist = config.allorders;
           this._super();
        },
        getPrice: function(){
            return this.price;
        },
        getMessage: function(){
            return this.message;
        },
        priceFormat: function(price) {
            return "$"+price;
        }
    });
}
);