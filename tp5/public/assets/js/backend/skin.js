define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'skin/index',
                   /* add_url: 'skin/add',
                    edit_url: 'skin/edit',
                    del_url: 'skin/del',
                    multi_url: 'skin/multi',
                    dragsort_url: '',
                    table: 'skin',*/
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
              /*  escape: false,
                pk: 'id',
                sortName: 'weigh',
                pagination: false,
                commonSearch: false,*/
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                    /*    {field: 'price', title: __('价格')},
                        {field: 'name', title: __('名称')},
                        {field: 'inventory', title: __('库存')},
                      //  {field: 'flag', title: __('Flag'), operate: false, formatter: Table.api.formatter.flag},
                        {field: 'picture', title: __('图片'), operate: false, formatter: Table.api.formatter.image},
                     
                        {field: 'updatetime', title: __('修改时间')},
        
                        {field: 'status', title: __('Status'), operate: false, formatter: Table.api.formatter.status},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}*/
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                $(document).on("change", "#c-type", function () {
                    $("#c-pid option[data-type='all']").prop("selected", true);
                    $("#c-pid option").removeClass("hide");
                    $("#c-pid option[data-type!='" + $(this).val() + "'][data-type!='all']").addClass("hide");
                    $("#c-pid").selectpicker("refresh");
                });
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});