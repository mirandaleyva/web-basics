
# Flexbox-Übung (praxisnah, ohne "Webseite" bauen)

**Ziel:** Du übst Flexbox an realistischen UI‑Bausteinen (Header, Sidebar-Layout, Karten-Grid, Footer) – alles in *einer* HTML-Datei.  
Du arbeitest ausschließlich in `styles.css` (Starter) und nutzt **nur Flexbox** (keine Grid‑Lösung).

## Dateien
- `index.html` – Markup mit vier Aufgabenbereichen (nicht ändern).
- `styles.css` – Starter mit TODOs. **Hier arbeitest du.**
- `solution.css` – Musterlösung (nur zur Kontrolle).
- Diese README.

## So startest du
1. Öffne `index.html` im Browser.
2. Verknüpft ist `styles.css` (Starter). Arbeite die TODOs pro Abschnitt ab.
3. Vergleiche am Ende mit `solution.css` (in `index.html` kannst du testweise die CSS‑Datei im `<link>` umstellen).

---

## Aufgaben

### 1) Header: drei Zonen perfekt ausrichten
**Ziel:** 
- Logo links, Navigation **zentriert und gleichmäßig verteilt**, User‑Menü rechts. 
- Vertikal mittig, durchgängige Höhe 64px, innen 16px Abstand.

**Hinweise (Flexbox):** `display: flex; justify-content: space-between; align-items: center;`  
Für die mittlere Nav: `display:flex; gap:...;` und zentrieren im verfügbaren Raum.

### 2) Sidebar‑Layout: feste Sidebar + flexibles Content‑Panel
**Ziel:** 
- Links eine **feste** Sidebar (Breite **240px**), rechts Content der **restliche Breite** einnimmt.
- Die äußere Höhe ist min. 400px; der Content soll scrollen können, wenn zu viel Inhalt.
- Im Contentbereich befindet sich ein **Karten‑Container** mit Karten, die **umbruchfähig** sind und **max. 3 pro Reihe** zeigen (bei schmalen Bildschirmen entsprechend weniger). Einheitlicher **gap** zwischen Karten.

**Hinweise (Flexbox):** 
- Für den äußeren Layout‑Wrapper Flex nutzen; Sidebar per fester Breite (`flex: 0 0 240px`) und Content per `flex: 1 1 auto`.
- Karten‑Container: `display:flex; flex-wrap:wrap; gap:...;` und per `flex: 1 1 calc(...)` eine Breite definieren, die max. 3 pro Reihe erlaubt.

### 3) Footer: Sektionen responsiv mit Flexbox
**Ziel:** 
- Auf **breiten** Ansichten die vier Footer‑Sektionen als **eine Zeile** mit **gleichmäßigem Abstand**.
- Auf **schmalen** Ansichten (< 600px) die Sektionen **untereinander** mit `gap` und zentrierten Überschriften.

**Hinweise (Flexbox):** 
- Breite Ansichten: Zeile, `justify-content: space-between; align-items:flex-start;`
- Schmal: `flex-direction: column; align-items: center;` mittels Media Query. Flexbox bleibt weiterhin die Basis.

### 4) Bonus (optional): Reihenfolge steuern
**Ziel:** 
- Mache die Reihenfolge im Header auf sehr schmalen Ansichten **Logo oben**, **Nav darunter**, **User‑Menü zuletzt** – rein per Flexbox (`order`).

---

## Abnahmekriterien (Checkliste)
- [ ] Header: Drei Zonen wie beschrieben, vertikal sauber zentriert, konsistente Abstände.
- [ ] Sidebar fix 240px; Content füllt Rest; Gesamthöhe min. 400px; Content kann scrollen.
- [ ] Kartengrid bricht sauber um (3/2/1 pro Reihe je nach Breite) mit gleichmäßigen Gaps.
- [ ] Footer: Zeile auf breit, Spalte auf schmal mit zentrierten Headings.
- [ ] Nur Flexbox genutzt (kein CSS Grid).

Viel Erfolg!
