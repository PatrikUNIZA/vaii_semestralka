# Webová aplikácia na tvorbu a správu univerzitného rozvrhu

Patrik Repáň

5ZYI33

## Stručný opis projektu

Projekt predstavuje webovú aplikáciu na jednoduchú tvorbu a správu univerzitných rozvrhov. Je určená študentom a učiteľom s cieľom zjednodušiť organizáciu vyučovania, správu predmetov a prideľovanie učební.

## Role v projekte

- **Študent:** Vyhľadáva a zapisuje si predmety.
- **Učiteľ:** Spravuje svoje predmety a rozvrhové termíny.
- **Administrátor:** Spravuje používateľov, učebne, všetky predmety a import/export údajov.

## Prípady použitia podľa rolí

**Študent**

- Vyhľadá a zobrazí dostupné predmety.
- Zapíše sa na predmet alebo sa z neho odhlási.
- Manuálne alebo automaticky si vytvorí rozvrh.
- Zobrazí si týždenný rozvrh.

**Učiteľ**

- Vytvorí alebo upraví predmet a jeho termíny.
- Priradí predmetu učebňu a kapacitu.
- Skontroluje obsadenosť a dostupnosť učební.
- Zobrazí zápisy študentov.

**Administrátor**

- Vytvára, upravuje a deaktivuje používateľské účty.
- Spravuje všetky predmety, učebne a zápisy.
- Importuje/exportuje dáta zo súboru.

## Plánované entity

- **Používateľ (user):** ID, meno, priezvisko, e-mail, hash hesla, rola a stav účtu.
- **Predmet (course):** ID, názov, kód, popis, kapacita, učiteľ a stav.
- **Učebňa (room):** ID, názov, budova, kapacita, vybavenie a dostupnosť.
- **Termín predmetu (course_slot):** ID, predmet, učebňa, deň, čas začiatku a konca, typ výučby.
- **Zápis na predmet (enrollment):** ID, študent, predmet, dátum a stav zápisu.

## Vzťahy medzi entitami

- Jeden učiteľ môže spravovať viac predmetov (1:N).
- Jeden predmet môže mať viac rozvrhových termínov (1:N).
- Jedna učebňa môže byť priradená viacerým termínom (1:N), ak sa časovo neprekrývajú.
- Študenti a predmety majú vzťah M:N, ktorý zabezpečuje entita Zápis na predmet.

## Hlavné stránky aplikácie

1. **Prihlásenie** – prístup používateľov do aplikácie.
2. **Domovská stránka** – prehľad informácií podľa používateľskej roly.
3. **Katalóg predmetov** – vyhľadávanie a filtrovanie predmetov.
4. **Detail predmetu** – informácie o predmete, termínoch a obsadenosti.
5. **Môj rozvrh** – zobrazenie a úprava týždenného rozvrhu študenta.
6. **Správa predmetov** – vytváranie a úprava predmetov a termínov.
7. **Správa učební** – evidencia učební a ich kapacít.
8. **Správa používateľov** – administrácia účtov.
9. **Import/Export údajov** – import/export dát zo súboru.

## Rozdelenie funkcionality

### Základné funkcie

- Prihlasovanie a oprávnenia podľa používateľských rolí.
- Správa používateľov, predmetov a učební.
- Vyhľadávanie predmetov a správa zápisov študentov.
- Tvorba rozvrhu a jeho týždenné zobrazenie.
- Manuálny výber termínov a kontrola časových kolízií.
- Import/export dát zo súboru.

### Rozširujúce funkcie

- Automatické zostavenie rozvrhu podľa preferencií.
- Export rozvrhu do kalendára.
