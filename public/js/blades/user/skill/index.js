skills_data = [];


$(document).ready(function () {
    refreshSkill();
});

function refreshSkill() {
    let skillContainer = $(`#skill_container`);

    let URL = baseUrl + `/user/skill/index`;
    skillContainer.empty();

    $.ajax({
        url: URL,
        type: 'GET',
        data: {},
        success: function (result) {
            if (result.status) {
                let skills = result.data.skills;
                console.log('skills', result.data);
                if (skills.length == 0) {
                    $('#add_your_first_skill').show();
                } else {

                    $('#add_your_first_skill').hide();
                }

                skills.forEach(function (skill) {
                    skillContainer.append(skill.skill_card);
                    skills_data[skill.id] = skill;
                });


            }

        },
        complete: function () {

        },
        error: function () {
        }
    });

}


fillSkillModal = function(id,name,level)
{

    resetForm('save_skill_form');
    $('#skill_id').val(id);
    $('#name').val(name);
   // $('#level').slider('val',level);

    
    



}