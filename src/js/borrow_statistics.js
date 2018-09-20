 // 基于准备好的dom，初始化echarts图表
 var myChart = echarts.init(document.getElementById('mainBox')); 
        
 var option = {
    title : {
        text: '借款类型的金额统计',
        subtext: '2018-09统计',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient : 'vertical',
        x : 'left',
        data:[]
    },
    toolbox: {
        show : false,
        feature : {
            mark : {show: true},
            dataView : {show: false, readOnly: false},
            magicType : {
                show: false, 
                type: ['pie', 'funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        width: '50%',
                        funnelAlign: 'left',
                        max: 1548
                    }
                }
            },
            restore : {show: false},
            saveAsImage : {show: true}
        }
    },
    //是否可以重新计算
    calculable : true,
    series : [
        {
            name:'访问来源',
            type:'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[]
        }
    ]
};
                    
 // 为echarts对象加载数据 
 myChart.setOption(option);

//  发起ajax请求去后端api获取报表数据
$.get('./api/borrowData.php',function(result){
    console.log('报表数据：',result);
    option.legend.data=result.title;//修改统计的图例数据
    option.series[0].data=result.data;//修改统计的序列数据

    myChart.hideLoading();
    myChart.setOption(option);
},'json');