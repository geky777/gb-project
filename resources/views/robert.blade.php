<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>The Road Not Taken — Interactive Archive</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Cormorant+Garamond:wght@300;400&display=swap" rel="stylesheet">

<style>
/* GENERAL STYLING */
* { margin:0; padding:0; box-sizing:border-box; }
body {
  font-family: 'Cormorant Garamond', serif;
  background: #2b2d3a;
  color: #e6e4df;
  overflow-x: hidden;
}
a { text-decoration:none; color:#d4af37; }
a:hover { color:#fff; }

h1,h2,h3,h4 { font-family:'Cinzel Decorative', serif; color:#d4af37; }

/* HEADER */
header { 
  text-align:center; 
  padding:60px 20px 40px; 
  background: #2b2d3a;
}
h1 { 
  font-size:clamp(3rem,6vw,5rem); 
  letter-spacing: 4px;
  margin-bottom: 20px;
}

.content-container { 
  max-width:900px; 
  margin:auto; 
  padding:20px; 
}

/* NAVIGATION TIMELINE */
.nav-timeline { 
  display:flex; 
  justify-content:space-around; 
  align-items: center;
  margin:30px 0 50px; 
  position:relative; 
  padding: 0 40px;
}
.nav-timeline::before { 
  content:''; 
  position:absolute; 
  top:50%; 
  left:40px; 
  right:40px; 
  height:2px; 
  background:#d4af37; 
  z-index:0; 
}
.nav-item { 
  z-index:1; 
  text-align:center; 
  cursor:pointer; 
  background: #2b2d3a;
  padding: 5px 10px;
}
.nav-item:hover h4 { 
  color:#fff; 
  transform:scale(1.1); 
}
.nav-item h4 { 
  transition:0.3s; 
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* SECTION STYLING */
section { 
  margin-bottom:60px; 
  padding: 30px 0;
}
section h3 { 
  font-size: 1.8rem;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 2px;
}

/* SUMMARY SECTION */
.summary-box {
  background: rgba(42, 42, 52, 0.6);
  border-left: 4px solid #d4af37;
  padding: 20px 30px;
  line-height: 1.8;
}
.summary-quote {
  font-style: italic;
  color: #d4af37;
  margin-top: 15px;
  padding-left: 20px;
  border-left: 2px solid #d4af37;
}

/* CHARACTER CARDS */
.character-container { 
  display:flex; 
  gap:20px; 
  justify-content:center;
  flex-wrap: wrap;
}
.character-card { 
  background: rgba(42, 42, 52, 0.8);
  padding:20px; 
  border:2px solid #d4af37;
  border-radius:8px; 
  width:280px; 
  transition:transform 0.3s; 
  cursor:pointer; 
  text-align: center;
}
.character-card:hover { 
  transform:translateY(-10px); 
  box-shadow: 0 10px 30px rgba(212,175,55,0.3);
}
.character-card h4 {
  font-size: 1.3rem;
  margin-bottom: 15px;
}
.character-card p { 
  font-size:0.95rem; 
  line-height: 1.6;
}

/* ANALYSIS BOX */
.analysis-box { 
  background: rgba(42, 42, 52, 0.6);
  padding:25px 35px; 
  border-left: 4px solid #d4af37;
  line-height: 1.8;
}
.analysis-box p {
  margin-bottom: 15px;
}
.analysis-box strong {
  color: #d4af37;
}

/* AUTHOR CARD */
.author-card {
  background: rgba(42, 42, 52, 0.8);
  padding:30px;
  border:2px solid #d4af37;
  border-radius:8px;
  max-width:600px;
  margin:30px auto;
  text-align:center;
}
.author-card h4 {
  font-size: 2rem;
  margin-bottom:15px;
}
.author-card p {
  line-height: 1.8;
}

/* GAME SECTION */
#play-game { 
  text-align: center;
  background: rgba(42, 42, 52, 0.6);
  padding:40px; 
  border-radius:8px;
  border: 2px solid #d4af37;
}
#play-game h3 { 
  margin-bottom:25px;
  font-size: 2rem;
}
.game-buttons {
  display: flex;
  gap: 15px;
  justify-content: center;
}
.game-btn { 
  padding:12px 30px; 
  border:2px solid #d4af37; 
  background:transparent; 
  color:#d4af37; 
  border-radius:5px; 
  cursor:pointer; 
  transition:0.3s;
  font-family: 'Cinzel Decorative', serif;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.game-btn:hover { 
  background:#d4af37; 
  color:#2b2d3a; 
}

/* MODAL */
.modal { 
  display:none; 
  position:fixed; 
  z-index:2000; 
  left:0; top:0; 
  width:100%; height:100%; 
  background-color:rgba(0,0,0,0.8); 
  align-items:center; 
  justify-content:center;
}
.modal.show { display:flex; }
.modal-content { 
  background-color:#2b2d3a; 
  padding:30px; 
  border:2px solid #d4af37; 
  width:90%; 
  max-width:600px; 
  border-radius:8px; 
  box-shadow:0 10px 50px rgba(0,0,0,0.9); 
  text-align:center;
}
.modal-content h3 {
  margin-bottom: 20px;
  font-size: 2rem;
}
.modal-content p {
  margin-bottom: 20px;
  line-height: 1.6;
}
.modal-content button { 
  margin:8px; 
  padding:10px 20px; 
  border:2px solid #d4af37; 
  background:transparent; 
  color:#d4af37; 
  border-radius:5px; 
  cursor:pointer; 
  transition:0.3s;
  font-family: 'Cormorant Garamond', serif;
  font-size: 1rem;
}
.modal-content button:hover { 
  background:#d4af37; 
  color:#2b2d3a; 
}
.modal-close { 
  float:right; 
  font-size:2rem; 
  cursor:pointer; 
  color:#d4af37;
  line-height: 1;
}
</style>
</head>
<body>

<header>
<h1>THE ROAD NOT TAKEN</h1>
</header>

<div class="content-container">

  <div class="nav-timeline">
    <div class="nav-item" onclick="scrollToSection('summary')"><h4>Summary</h4></div>
    <div class="nav-item" onclick="scrollToSection('conventions')"><h4>Conventions</h4></div>
    <div class="nav-item" onclick="scrollToSection('author')"><h4>Author</h4></div>
    <div class="nav-item" onclick="scrollToSection('analysis')"><h4>Analysis</h4></div>
    <div class="nav-item" onclick="scrollToSection('greatness')"><h4>Greatness</h4></div>
  </div>

  <section id="summary">
    <h3>Summary</h3>
    <div class="summary-box">
      <p>Speaker walks in a yellow wood where two roads diverge. He must choose one, knowing he cannot return to try the other. Both roads appear equally worn, though he convinces himself one is "less traveled." Later imagines telling the story with a sigh, claiming the choice "made all the difference." The poem reflects on decision-making, uncertainty, and how people rationalize their choices.</p>
      <div class="summary-quote">"A reflective journey through choices and consequences"</div>
    </div>
  </section>

  <section>
    <h3>Historical Timeline</h3>
    <div class="character-container">
      <div class="character-card" onclick="showTimelineEvent('1912')">
        <h4>1912</h4>
        <p>Frost moves to England, befriends Edward Thomas</p>
      </div>
      <div class="character-card" onclick="showTimelineEvent('1915')">
        <h4>1915</h4>
        <p>Poem written and published in The Atlantic Monthly</p>
      </div>
      <div class="character-card" onclick="showTimelineEvent('1916-1917')">
        <h4>1916-1917</h4>
        <p>Republished; Edward Thomas dies in WWI</p>
      </div>
    </div>
  </section>

  <section id="conventions">
    <h3>Conventions of the School of Thought</h3>
    <div class="analysis-box">
      <p><strong>Modernism</strong> – Focus on real-life experiences, ambiguity, and personal meaning.</p>
      <p><strong>Romanticism (influence)</strong> – Use of nature imagery to reflect human emotion.</p>
      <p><strong>Key Ideas</strong> – Life is uncertain; choices define meaning; reflection shapes identity.</p>
    </div>
  </section>

  <section id="author">
    <h3>About the Author</h3>
    <div class="author-card">
      <h4>Homer</h4>
      <p>Robert Frost (1874–1963) was born in San Francisco and raised in New England. After early struggles with publishing, his breakthrough came in England (1912–1915). He wrote famous collections like <em>A Boy's Will</em> (1913) and <em>North of Boston</em> (1914). Frost won four Pulitzer Prizes for poetry and was known for simple language, rural imagery, and philosophical depth. He died in 1963, remembered as one of America's greatest poets.</p>
    </div>
  </section>

  <section id="analysis">
    <h3>Literary Analysis</h3>
    <div class="analysis-box">
      <p>The Iliad is written in <strong>dactylic hexameter</strong> and uses vivid Homeric similes. It examines human pride, wrath, and fate—offering timeless reflections on the cost of glory.</p>
      <p><strong>Themes:</strong> Choice and decision-making, reflection and uncertainty, individualism and self-justification.</p>
      <p><strong>Symbols:</strong> Two roads represent life's choices; the forest symbolizes mystery and uncertainty; the autumn setting signifies change and turning points.</p>
      <p><strong>Tone:</strong> Reflective, uncertain, tinged with irony.</p>
      <p><strong>Style:</strong> Simple, conversational language with four stanzas of five lines each, ABAAB rhyme scheme, and everyday imagery with deep philosophical meaning.</p>
    </div>
  </section>

  <section id="greatness">
    <h3>What Makes the Poem Great</h3>
    <div class="analysis-box">
      <p><strong>Literary Merit</strong> – Simple language with profound meaning about life's choices.</p>
      <p><strong>Artistic Quality</strong> – Symbolism, imagery, and tone create emotional depth.</p>
      <p><strong>Universal Appeal</strong> – Relatable theme of decision-making across cultures and generations.</p>
      <p><strong>Recognition</strong> – Enhanced Frost's reputation, contributing to his Pulitzer Prizes.</p>
      <p><strong>Enduring Legacy</strong> – Continues to inspire reflection in education, speeches, and popular culture.</p>
    </div>
  </section>

  <section id="play-game">
    <h3>Do You Want to Play a Game?</h3>
    <div class="game-buttons">
      <button class="game-btn" onclick="openGameOptions()">Yes</button>
      <button class="game-btn" onclick="alert('Maybe next time!')">No</button>
    </div>
  </section>

</div>

<!-- MODAL -->
<div id="gameModal" class="modal" aria-hidden="true">
  <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="gameTitle">
    <div id="gameContent"></div>
  </div>
</div>

<script>
// Smooth scroll to section
function scrollToSection(id) {
  document.getElementById(id).scrollIntoView({ behavior: 'smooth', block: 'center' });
}

// Modal setup
const modal = document.getElementById('gameModal');
const gameContent = document.getElementById('gameContent');

modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });

function openGameOptions() {
  modal.classList.add('show');
  modal.setAttribute('aria-hidden','false');
  showActivityOptions();
}
function closeModal() {
  modal.classList.remove('show');
  modal.setAttribute('aria-hidden','true');
}

function showActivityOptions() {
  gameContent.innerHTML = `
    <span class="modal-close" id="closeModalBtn">&times;</span>
    <h3>Select a Game</h3>
    <div>
      <button id="game1Btn">Who Would You Be?</button>
      <button id="game2Btn">Theme Hunt</button>
      <button id="game3Btn">What Happens Next</button>
    </div>
  `;
  document.getElementById('closeModalBtn').onclick = closeModal;
  document.getElementById('game1Btn').onclick = startGame1;
  document.getElementById('game2Btn').onclick = startGame2;
  document.getElementById('game3Btn').onclick = startGame3;
}

// Game 1: Who Would You Be
function startGame1() {
  gameContent.innerHTML = `
    <span class="modal-close" id="closeModalBtn">&times;</span>
    <h3>Who Would You Be?</h3>
    <p>Imagine you are the speaker at the fork in the road. What would you do?</p>
    <div>
      <button onclick="showGame1Answer('first')">Take the first road</button>
      <button onclick="showGame1Answer('second')">Take the second road</button>
      <button onclick="showGame1Answer('refuse')">Refuse to choose</button>
    </div>
    <div id="game1Result" style="margin-top:20px; padding:15px; border-radius:5px; display:none;"></div>
    <p style="margin-top:15px; font-size:0.9rem;">Compare your choice with what the speaker actually did.</p>
  `;
  document.getElementById('closeModalBtn').onclick = closeModal;
}

function showGame1Answer(choice) {
  const resultDiv = document.getElementById('game1Result');
  resultDiv.style.display = 'block';
  resultDiv.style.background = 'rgba(212, 175, 55, 0.2)';
  resultDiv.style.border = '2px solid #d4af37';
  
  const responses = {
    'first': '<p style="color:#d4af37; margin:0;">You chose to take the first road! The speaker also made a choice, though both paths seemed equally fair.</p>',
    'second': '<p style="color:#d4af37; margin:0;">You chose to take the second road! The speaker convinced himself one was "less traveled by."</p>',
    'refuse': '<p style="color:#d4af37; margin:0;">You chose to refuse to choose! Unlike you, the speaker had to make a decision and move forward.</p>'
  };
  
  resultDiv.innerHTML = responses[choice];
}

// Game 2: Theme Hunt
function startGame2() {
  gameContent.innerHTML = `
    <span class="modal-close" id="closeModalBtn">&times;</span>
    <h3>Theme Hunt</h3>
    <p>"I shall be telling this with a sigh / Somewhere ages and ages hence."</p>
    <p>Which theme is shown here?</p>
    <div>
      <button onclick="showGame2Answer('correct')">Reflection and Regret</button>
      <button onclick="showGame2Answer('wrong')">Choice</button>
      <button onclick="showGame2Answer('wrong')">Individualism</button>
    </div>
    <div id="game2Result" style="margin-top:20px; padding:15px; border-radius:5px; display:none;"></div>
  `;
  document.getElementById('closeModalBtn').onclick = closeModal;
}

function showGame2Answer(result) {
  const resultDiv = document.getElementById('game2Result');
  resultDiv.style.display = 'block';
  if(result === 'correct') {
    resultDiv.style.background = 'rgba(76, 175, 80, 0.2)';
    resultDiv.style.border = '2px solid #4CAF50';
    resultDiv.innerHTML = '<p style="color:#4CAF50; margin:0;">✅ Correct! This reflects Reflection and Regret</p>';
  } else {
    resultDiv.style.background = 'rgba(244, 67, 54, 0.2)';
    resultDiv.style.border = '2px solid #f44336';
    resultDiv.innerHTML = '<p style="color:#f44336; margin:0;">❌ Not quite. The correct answer is Reflection and Regret.</p>';
  }
}

// Game 3: What Happens Next
function startGame3() {
  gameContent.innerHTML = `
    <span class="modal-close" id="closeModalBtn">&times;</span>
    <h3>What Happens Next?</h3>
    <p>The speaker chooses one road and moves forward. What do you think happens?</p>
    <div>
      <button onclick="showGame3Answer('wrong')">He returns later</button>
      <button onclick="showGame3Answer('correct')">He never comes back</button>
      <button onclick="showGame3Answer('wrong')">He finds both roads meet again</button>
    </div>
    <div id="game3Result" style="margin-top:20px; padding:15px; border-radius:5px; display:none;"></div>
  `;
  document.getElementById('closeModalBtn').onclick = closeModal;
}

function showGame3Answer(result) {
  const resultDiv = document.getElementById('game3Result');
  resultDiv.style.display = 'block';
  if(result === 'correct') {
    resultDiv.style.background = 'rgba(76, 175, 80, 0.2)';
    resultDiv.style.border = '2px solid #4CAF50';
    resultDiv.innerHTML = '<p style="color:#4CAF50; margin:0;">✅ Correct! He never comes back.</p>';
  } else {
    resultDiv.style.background = 'rgba(244, 67, 54, 0.2)';
    resultDiv.style.border = '2px solid #f44336';
    resultDiv.innerHTML = '<p style="color:#f44336; margin:0;">❌ Not quite. He never comes back.</p>';
  }
}

function showTimelineEvent(period){
  const events = {
    '1912': 'Frost moves to England, befriends Edward Thomas, who inspires the poem.',
    '1915': 'Poem written in England as a playful response to Thomas\'s indecision; first published in The Atlantic Monthly.',
    '1916-1917': 'Republished in Frost\'s collection Mountain Interval. In 1917, Edward Thomas dies in World War I, adding tragic resonance to the poem.',
    '1920-1940': 'Gains popularity in schools and anthologies across America.',
    '1950-1960': 'Frost calls it "a tricky poem," noting its ironic tone.',
    '2015': '100th anniversary; critics highlight its frequent misinterpretation.',
    'Present': 'One of the most quoted and studied poems in American literature.'
  };
  
  modal.classList.add('show');
  modal.setAttribute('aria-hidden','false');
  gameContent.innerHTML = `
    <span class="modal-close" id="closeModalBtn">&times;</span>
    <h3>Historical Timeline: ${period}</h3>
    <p>${events[period]}</p>
    <button onclick="closeModal()">Close</button>
  `;
  document.getElementById('closeModalBtn').onclick = closeModal;
}
</script>

</body>
</html>