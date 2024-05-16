$(document).ready(function ($) {
  $("#cnpj").mask("00.000.000/0000-00", { reverse: true });
  $("#celular").mask("(00) 0 0000-0000", { reverse: true });
  $("#telefoneFixo").mask("(00) 0000-0000", { reverse: true });
  $('#telefone').mask('(00) 0000-0000');
  $("#cep").mask("00000-000", { reverse: true });
  $("#valor").mask("#.##0,00", { reverse: true });
  $("#valor_ja_pago").mask("#.##0,00", { reverse: true });
  $("#precoUnitario").mask("#.##0,00", { reverse: true });
  $("#valor_maximo_global").mask("#.##0,00", { reverse: true });
  $("#valor_homologado").mask("#.##0,00", { reverse: true });
  $("#preco_de_abertura").mask("#.##0,00", { reverse: true });
  $("#preco_de_compra").mask("#.##0,00", { reverse: true });
  $("#valorAditivos").mask("#.##0,00", { reverse: true });
  $("#valorContratado").mask("#.##0,00", { reverse: true });
  $("#valorAditivo").mask("#.##0,00", { reverse: true });

  $(".date").mask("00/00/0000");
  $(".time").mask("00:00:00");
  $(".date_time").mask("00/00/0000 00:00:00");
  $(".phone_us").mask("(000) 000-0000");
  $("#area_code").mask("000");
  $(".mixed").mask("AAA 000-S0S");
  $(".cpf").mask("000.000.000-00", { reverse: true });
  $("#CPF").mask("000.000.000-00");
  $("#CNPJ").mask("00.000.000/0000-00", { reverse: true });
  $("#e_cnpj").mask("00.000.000/0000-00", { reverse: true });
  $("#nada").mask("000.000.000.000.000,00", { reverse: true });
  $("#vUnCom").mask("#.##0,00", { reverse: true });
  $("#frete").mask("#.##0,00", { reverse: true });
  $("#outraDesp").mask("#.##0,00", { reverse: true });
  $(".ip_address").mask("0ZZ.0ZZ.0ZZ.0ZZ", {
    translation: {
      Z: {
        pattern: /[0-9]/,
        optional: true,
      },
    },
  });
  $(".percent").mask("##0,00%", { reverse: true });
  $(".clear-if-not-match").mask("00/00/0000", { clearIfNotMatch: true });
  $(".placeholder").mask("00/00/0000", { placeholder: "__/__/____" });
  $(".fallback").mask("00r00r0000", {
    translation: {
      r: {
        pattern: /[\/]/,
        fallback: "/",
      },
      placeholder: "__/__/____",
    },
  });
  $(".selectonfocus").mask("00/00/0000", { selectOnFocus: true });

  $("#nItem").mask("000");
});
