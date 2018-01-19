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
            var teamId = '#team-' + this.dataset.teamId;
            var originalData = $(teamId + ' .editable-team-member');

            ParticipantsList.cancelEditTeam(self, originalData);
        });

        $('.save-team').on('click', function() {
            var self = this;
            ParticipantsList.saveEditTeam(self);
        });

        $('.remove-team').on('click', function() {
            var self = this;
            ParticipantsList.deleteEditTeam(self);
        })
    },
    editTeam: function(self) {
        var teamIdData = self.dataset.teamId;
        var teamId = '#team-' + teamIdData;
        var originalData = $(teamId + ' .editable-team-member');
        var participantData = {};

        $(originalData).each(function() {
            participantData['participantId'] = this.value;
        });

        $(teamId + ' .editable-value').removeClass('hidden');
        $(teamId + ' .team-static-text').addClass('hidden');
    },
    cancelEditTeam: function(self, originalData) {
        var teamIdData = self.dataset.teamId;
        var teamId = '#team-' + teamIdData;

        // Todo:
        // Remove data that was added, aka return to null
        //Need to do so for both First and Las name. Create a Person object.
        $(originalData).each(function() {
            console.log(this.value);
        });

        $(teamId + ' .editable-value').addClass('hidden');
        $(teamId + ' .team-static-text').removeClass('hidden');
    },
    saveEditTeam: function(self) {
        var teamIdData = self.dataset.teamId;
        var teamId = '#team-' + teamIdData;

        $('.editable-value').addClass('hidden');
        $('.team-static-text').removeClass('hidden');

        // Todo:
        // Take the data for the team and add it if it is new, remove if it is not new and null,
        // and edit it if it is not new and not null
    },
    deleteEditTeam: function(self) {
        var teamIdData = self.dataset.teamId;
        var teamId = '#team-' + teamIdData;

        // Todo:
        // Pop modal to confirm and delete team
    }
};

ParticipantsList.init();