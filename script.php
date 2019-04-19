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
            	function delfeito(id) {
                    alert(id);
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
                                },
                            });
                        }
                    });
                };
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
                function delfazendo(id) {
                    alert(id);
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
                                },
                            });
                        }
                    });
                };
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
                function delfeito(id) {
                    alert(id);
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
                                },
                            });
                        }
                    });
                };
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
                    $.ajax({
                        url: 'insertfeito.php',
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
                    $.ajax({
                        url: 'insertfazendo.php',
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
                    $.ajax({
                        url: 'insertfazer.php',
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



function delfeito(id) {
    alert(id);
    $.ajax({
        url: 'delete.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
            $.ajax({
                url: 'insertfeito.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                    $('#tfeito').html(data);
                },
            });
        }
    });
};


function delfazendo(id) {
    alert(id);
    $.ajax({
        url: 'delete.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
            $.ajax({
                url: 'insertfazendo.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                    $('#tfazendo').html(data);
                },
            });
        }
    });
};



function delfazer(id) {
    alert(id);
    $.ajax({
        url: 'delete.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
            $.ajax({
                url: 'insertfazer.php',
                type: 'POST',
                data: {
                    atividade: $("#atividade_input").val(),
                    tipo: $("#tipo").val(),
                },
                success: function(data) {
                    $('#tfazer').html(data);
                },
            });
        }
    });
};




























</script>