define(['jquery', 'uiComponent', 'ko'], function ($, Component, ko) {
    'use strict';
    return Component.extend({
        defaults: {
            template: 'Learning_KnockoutJs/knockout-test'
        },
        initialize: function () {
           this.customerName = ko.observableArray([]);
           this.customerData = ko.observable('');
           this.employeeDetails = ko.observableArray([]);
           this.employeeName = ko.observable('');
           this.employeeSalary = ko.observable('');
           this._super();
        },
        addNewCustomer: function () {
            console.log(this.customerData());
            this.customerName.push({name:this.customerData()});
            this.customerData('');
        },
        addNewEmployeeAndSalary: function () {
            //console.log(this.customerData());
            this.employeeDetails.push({emp_name:this.employeeName(),emp_sal:this.employeeSalary()});
            this.employeeName('');
            this.employeeSalary('');
        }
    });
}
);