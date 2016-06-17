/* 
 * This script create object for telephone book
 */


var telephoneBook = {
              title: 'Table of people',
                    sorting: true,
                    messages: RusLocalization,
                    actions: {
                        listAction: 'controller/router.php?controller=telephoneBookController&method=getAll',    
                        createAction: '/GettingStarted/CreatePerson',
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