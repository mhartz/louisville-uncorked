var ParticipantsList = {
    init: function() {

        $('.edit-team-button').on('click', function() {
            var self = this;
            ParticipantsList.editTeam(self);

                // $.ajax({
                //     method: 'POST',
                //     url: 'editTeams',
                //     data: {
                //         '_token': token,
                //         'participantId': participantIdData,
                //         'firstName': firstName,
                //         'lastName': lastName,
                //         'teamName': teamName,
                //         'teamId' : teamId
                //     },
                //     success: function(data) {
                //         console.log(data);
                //         $('input[team-id-name-' + teamId + ']').each(function() {
                //             $(this).val(teamName);
                //         });
                //     },
                //     error: function() {
                //         console.log('hit was error');
                //     }
                // });
        });

        $('.cancel-save-team').on('click', function() {
            var self = this;
            ParticipantsList.cancelEditTeam(self);
        });
    },
    editTeam: function(self) {
        var teamIdData = self.dataset.id;

        $('.editable-value').removeClass('hidden');
        $('.team-static-text').addClass('hidden');
    },
    cancelEditTeam: function(self) {
        var teamIdData = self.dataset.id;

        $('.editable-value').addClass('hidden');
        $('.team-static-text').removeClass('hidden');
    }
};

ParticipantsList.init();