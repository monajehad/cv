
fillSkillModal = function(id,name,level)
{

    resetForm('save_skill_form');
    $('#skill_id').val(id);
    $('#name').val(name);
    $('#level').selectpicker('val',level);

    
    



}