document.addEventListener('DOMContentLoaded', () => {
        const firstElement = document.getElementById('choices-1');
        const choices1 = new Choices(firstElement, {
            delimiter: ',',
            editItems: true,
            maxItems: 5,
            removeButton: true
        });

        const choices2 = new Choices('#choices-2', {
            allowPaste: false,
            allowDuplicates: false,
            editItems: true,
        });

        const choices3 = new Choices('#choices-3', {
            allowDuplicates: false,
            editItems: true,
            regexFilter: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
        });

        const choices4 = new Choices('#choices-4', {
            addItems: false,
            removeItems: false,
        }).disable();

        const choices5 = new Choices('#choices-5', {
            prependValue: 'item-',
            appendValue: `-${Date.now()}`,
        }).removeActiveItems();

        const choices6 = new Choices('#choices-6', {
            items: ['josh@joshuajohnson.co.uk', { value: 'joe@bloggs.co.uk', label: 'Joe Bloggs' } ],
        });

        const choices7 = new Choices('#choices-7', { allowSearch: false }).setValue(['Set value 1', 'Set value 2']);

        const choicesAjax = new Choices('#choices-12').ajax((callback) => {
            fetch('https://api.discogs.com/artists/391170/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW')
                .then((response) => {
                    response.json().then(function(data) {
                        callback(data.releases, 'title', 'title');
                    });
                })
                .catch((error) => {
                    callback();
                });
        })

        const choicesMultiple = new Choices('[data-choice]', {
            placeholderValue: 'This is a placeholder set in the config',
        });

    });