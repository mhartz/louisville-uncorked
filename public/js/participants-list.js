var ParticipantsList = {
    init: function() {
        var participantIdData,
            firstName,
            lastName,
            teamName,
            teamId,
            token;

        $('.edit-participant-button').on('click', function() {
            participantIdData = this.dataset.id;

            if(this.dataset.editState === "false") {
                $(this).html('Save');
                $('input[first-name-attr-' + participantIdData + ']').prop('disabled', '');
                $('input[last-name-attr-' + participantIdData + ']').prop('disabled', '');
                $('input[team-name-attr-' + participantIdData + ']').prop('disabled', '');
                $('input[team-id-attr-' + participantIdData + ']').prop('disabled', '');
                this.dataset.editState = "true";
            }
            else {
                var parentId = 'form[data-parent-id="' + participantIdData + '"]';
                token = $(parentId).next().val();

                firstName = $('input[first-name-attr-' + participantIdData + ']').val();
                lastName = $('input[last-name-attr-' + participantIdData + ']').val();
                teamName = $('input[team-name-attr-' + participantIdData + ']').val();
                teamId = $('input[team-id-attr-' + participantIdData + ']').val();

                console.log(teamId);

                $.ajax({
                    method: 'POST',
                    url: 'editTeams',
                    data: {
                        '_token': token,
                        'participantId': participantIdData,
                        'firstName': firstName,
                        'lastName': lastName,
                        'teamName': teamName,
                        'teamId' : teamId
                    },
                    success: function(data) {
                        console.log(data);
                        $('input[team-id-name-' + teamId + ']').each(function() {
                            $(this).val(teamName);
                        });
                    },
                    error: function() {
                        console.log('hit was error');
                    }
                });
                $('input[first-name-attr-' + participantIdData + ']').prop('disabled', 'disabled');
                $('input[last-name-attr-' + participantIdData + ']').prop('disabled', 'disabled');
                $('input[team-name-attr-' + participantIdData + ']').prop('disabled', 'disabled');
                $('input[team-id-attr-' + participantIdData + ']').prop('disabled', 'disabled');
                $(this).html('Edit');
                this.dataset.editState = "false";

            }

            // would like to refresh the data automatically (reactively) if possible
            // might need to look into a simple Vue implementation for this

            // Also need to add validation

            // Need to refactor into methods
        });

        $('.cancel-participant-button').on('click', function() {
            var participantIdCancelData = this.dataset.id;

            $('input[first-name-attr-' + participantIdCancelData + ']').prop('disabled', 'disabled');
            $('input[last-name-attr-' + participantIdCancelData + ']').prop('disabled', 'disabled');
            $('input[team-name-attr-' + participantIdCancelData + ']').prop('disabled', 'disabled');
            $('input[team-id-attr-' + participantIdCancelData + ']').prop('disabled', 'disabled');
            $('.edit-participant-button[data-id="' + participantIdCancelData + '"]').html('Edit');
        });

        $('.add-participant-button').on('click', function() {
            
        });
    },
    addTeammate: function() {
        
    }
};

ParticipantsList.init();