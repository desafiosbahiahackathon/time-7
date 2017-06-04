$(function() {

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: 'Brancas',
            a: 100,

        }, {
            y: 'Pretas',
            a: 75,

        }, {
            y: 'Amarelas',
            a: 50,

        }, {
            y: 'Indígenas',
            a: 75,

        }, {
            y: 'Pardas',
            a: 50,

        }, {
            y: 'Outros',
            a: 75,

        }],
        xkey: 'y',
        ykeys: 'a',
        labels: ['Porcentagem'],

        resize: true
    });

});
