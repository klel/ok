/* 
 * This script create object for telephone book
 */


var telephoneBook = {
              title: 'Table of people',
                    sorting: true,
                    messages: RusLocalization,
                    actions: {
                        listAction: 'controller/router.php?controller=telephoneBookController&method=getAll',    
                        createAction: function createItem(postData) {
                            var ret;
                            return $.Deferred(function ($dfd) {
                                $.ajax({
                                    url: '/testCreate.php',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: postData,
                                    success: function (data) {
                                        ret = {
                                            'Result': "OK",
                                            'Record': data
                                        };
                                        $dfd.resolve(ret);
                                    },
                                    error: function () {
                                        $dfd.reject();
                                    }
                                });
                            });
                        },
                        updateAction: '/GettingStarted/UpdatePerson',
                        deleteAction: '/GettingStarted/DeletePerson'
                    },
                    fields: {
                        Id: {
                            key: true,
                            list: false
                        },
                        Name: {
                            title: 'Имя',
                            width: '20%'
                        },
                        FullName: {
                            title: 'Имя полностью',
                            width: '40%'
                        },
                        Telephone: {
                            title: 'Телефон',
                            edit: true
                        }
                                              
                    }
                }