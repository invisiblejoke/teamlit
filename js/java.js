$(document).ready(function(){
    $("#githubnav").click(function(){
        $("#githubdash").show();
        $("#slackdash").hide();
        $("#moodledash").hide();
        $("#teammembersdash").hide();
        $("#teamcontributiondash").hide();
    });

    $("#slacknav").click(function(){
        $("#githubdash").hide();
        $("#slackdash").show();
        $("#moodledash").hide();
        $("#teammembersdash").hide();
        $("#teamcontributiondash").hide();
    });

    $("#moodlenav").click(function(){
        $("#githubdash").hide();
        $("#slackdash").hide();
        $("#moodledash").show();
        $("#teammembersdash").hide();
        $("#teamcontributiondash").hide();
    });

    $("#teammembersnav").click(function(){
        $("#githubdash").hide();
        $("#slackdash").hide();
        $("#moodledash").hide();
        $("#teammembersdash").show();
        $("#teamcontributiondash").hide();
    });

    $("#teamcontributionnav").click(function(){
        $("#githubdash").hide();
        $("#slackdash").hide();
        $("#moodledash").hide();
        $("#teammembersdash").hide();
        $("#teamcontributiondash").show();
    });
});
