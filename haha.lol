const sprintMapping = {
            XS: 1,
            S: 2,
            M: 4.5,
            L: 9,
            XL: 18,
        };
        
        let tasks = [];

        function addTask(size) {
            tasks.push(size);
            updateTaskList();
            setTimeout(() => {
                const taskListContainer = document.querySelector('.task-list-container');
                taskListContainer.scrollTop = taskListContainer.scrollHeight;
            }, 100);
        }

        function removeTask(index) {
            tasks.splice(index, 1);
            updateTaskList();
        }

        function updateTaskList() {
            const taskList = document.getElementById('task-list');
            taskList.innerHTML = '';
            tasks.forEach((task, index) => {
                const li = document.createElement('li');
                li.innerHTML = `${task} - ${sprintMapping[task]} Sprints <button class="remove-btn" onclick="removeTask(${index})">✖</button>`;
                taskList.appendChild(li);
            });
        }

        function execute() {
            const totalSprints = tasks.reduce((total, size) => total + sprintMapping[size], 0);
            const resultDiv = document.getElementById('result');
            resultDiv.innerText = `Total Sprints Required: ${totalSprints}`;
            resultDiv.style.display = 'block';
        }
