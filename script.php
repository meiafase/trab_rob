<script >

    $(document).ready(function() {

        $.ajax({
            url: 'mostra.php',
            type: 'POST',
            data: {
                atividade: $("#atividade_input").val(),
                tipo: $("#tipo").val(),
            },
            success: function(data) {
                $('#tfazer').html(data);
            }
        });




        $.ajax({
            url: 'mostra2.php',
            type: 'POST',
            data: {
                atividade: $("#atividade_input").val(),
                tipo: $("#tipo").val(),
            },
            success: function(data) {
                $('#tfazendo').html(data);
            }
        });


        $.ajax({
            url: 'mostra3.php',
            type: 'POST',
            data: {
                atividade: $("#atividade_input").val(),
                tipo: $("#tipo").val(),
            },
            success: function(data) {
                $('#tfeito').html(data);
            }
        });


        $("#feitobtn").click(function() {

            $.ajax({

                url: 'inserir.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                	alertify.success('Atividade Adicionada em FEITO');
                    $.ajax({
                        url: 'mostra3.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfeito').html(data);
                        },
                    });

                },
                beforeSend: function() {},
                error: function() {
                    alert("DEU PAU!!");
                }
            });

        });


        $("#fazendobtn").click(function() {

            $.ajax({

                url: 'inserir.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                	alertify.success('Atividade Adicionada em FAZENDO');
                    $.ajax({
                        url: 'mostra2.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfazendo').html(data);
                        },
                    });
                },
                beforeSend: function() {},
                error: function() {
                    alert("DEU PAU!!");
                }
            });

        });


        $("#fazerbtn").click(function() {

            $.ajax({

                url: 'inserir.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                	alertify.success('Atividade Adicionada em FAZER');
                    $.ajax({
                        url: 'mostra.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfazer').html(data);
                        },
                    });
                },
                beforeSend: function() {

                },
                error: function() {
                    alert("DEU PAU!!");
                }
            });

        });




        $('#teste').click(function() {
            $.ajax({
                url: 'trab_rob.php',
                success: function() {
                    $('#xama').html();
                    alertify.error('Cancelado com Sucesso!');
                },
            });
        });

    });




function delfazendo(id) {
    $.ajax({
        url: 'delete.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
            $.ajax({
                url: 'mostra2.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                    $('#tfazendo').html(data);
                    alertify.success('Deletado com Sucesso!');
                },
            });
        }
    });
};



function delfazer(id) {
    $.ajax({
        url: 'delete.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
            $.ajax({
                url: 'mostra.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                    $('#tfazer').html(data);
                    alertify.success('Deletado com Sucesso!');
                },
            });
        }
    });
};


function delfeito(id) {
    $.ajax({
        url: 'delete.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
            $.ajax({
                url: 'mostra3.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                    $('#tfeito').html(data);
                    alertify.success('Deletado com Sucesso!');
                },
            });
        }
    });
};

//FUNÇÃO PARA EDITAR

function editfazer(id) {
    $.ajax({
        url: 'edit.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
        	alertify.success('Movido para FAZENDO');
            $.ajax({
                url: 'mostra.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                    $.ajax({
                        url: 'mostra.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfazer').html(data);
                        }
                    });



                    $.ajax({
                        url: 'mostra2.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfazendo').html(data);
                        }
                    });


                    $.ajax({
                        url: 'mostra3.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfeito').html(data);
                        }
                    });
                },
            });
        }
    });
};


function editesquerda(id) {
    $.ajax({
        url: 'edit2.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
        	alertify.success('Movido para FAZER');
            $.ajax({
                url: 'mostra2.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                    $.ajax({
                        url: 'mostra.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfazer').html(data);
                        }
                    });



                    $.ajax({
                        url: 'mostra2.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfazendo').html(data);
                        }
                    });


                    $.ajax({
                        url: 'mostra3.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfeito').html(data);
                        }
                    });
                },
            });
        }
    });
};


function editdireita(id) {
    $.ajax({
        url: 'edit2.1.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
        	alertify.success('Movido para FEITO');
            $.ajax({
                url: 'mostra2.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                    $.ajax({
                        url: 'mostra.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfazer').html(data);
                        }
                    });


                    $.ajax({
                        url: 'mostra2.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfazendo').html(data);
                        }
                    });


                    $.ajax({
                        url: 'mostra3.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfeito').html(data);
                        }
                    });
                },
            });
        }
    });
};


function editfeito(id) {
    $.ajax({
        url: 'edit3.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
        	alertify.success('Movido para FAZENDO');
            $.ajax({
                url: 'mostra3.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                    $.ajax({
                        url: 'mostra.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfazer').html(data);
                        }
                    });

                    $.ajax({
                        url: 'mostra2.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfazendo').html(data);
                        }
                    });


                    $.ajax({
                        url: 'mostra3.php',
                        type: 'POST',
                        data: {
                            atividade: $("#atividade_input").val(),
                            tipo: $("#tipo").val(),
                        },
                        success: function(data) {
                            $('#tfeito').html(data);
                        }
                    });
                },
            });
        }
    });
};


</script>